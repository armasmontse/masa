<?php 

namespace App;

use Illuminate\CustomPostType;

class Artist extends CustomPostType
{
    const nombre_plural = 'Artistas';
    const nombre_singular = 'artista';
    // Slug para que coincida con el de la página.
    const slug = 'artist';

    // Elementos del post type 
    protected static $supports = ['title', 'editor', 'thumbnail'];

    // Icono de dashicon para mostrar en el admin
    protected static $menu_icon = 'dashicons-art';

    public function setMetas()
    {

    }
}