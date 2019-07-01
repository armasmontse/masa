<?php

namespace App\Providers;

class FiltersServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Elimina la barra de herramientas del sitio en el front
        add_filter('show_admin_bar', [$this, 'showAdminBar']);
        // Modificamos el wp_query.
        add_filter( 'posts_where', [$this, 'postsWhere'], 10, 2 );
        add_filter( 'query_vars', [$this, 'queryVars'] );
        add_filter( 'body_class', [$this, 'body_class'] );
    }

    public function showAdminBar()
    {
        return false;
    }

    public function queryVars($vars)
    {
        $vars[] = 'starts_with';
	    return $vars;
    }

    public function postsWhere($where, $query)
    {
        global $wpdb;

        $starts_with = $query->get('starts_with');

        if ( $starts_with ) {
            $where .= " AND $wpdb->posts.post_title LIKE '$starts_with%'";
        }

        return $where;
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }


    //Agregar slug de pagina a Body class
    public function body_class( $classes ) {
        global $post;
        if ( isset( $post ) ) {
            $classes[] = $post->post_type . '-' . $post->post_name;
        }
        return $classes;
    }
    

}
