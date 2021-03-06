<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Domain\ContactMethods\Models\ContactMethod;

class SeedContactsMethodsTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $methods = [
            [
                'name' => 'Courriel',
                'slug' => 'email',
                'description' => 'Par courriel',
                'base_url' => '',
                'link_prefix' => 'mailto:',
            ],[
                'name' => 'Téléphone',
                'slug' => 'phone',
                'description' => 'Par téléphone',
                'base_url' => '',
                'link_prefix' => 'tel:',
            ],[
                'name' => 'Facebook',
                'slug' => 'facebook',
                'description' => 'Page professionnel ou compte de personne, selon votre modèle.',
                'base_url' => 'https://facebook.com/',
                'link_prefix' => '',
            ],[
                'name' => 'Instagram',
                'slug' => 'instagram',
                'description' => 'Compte professionnel ou personnel, selon votre modèle.',
                'base_url' => 'https://instagram.com/',
                'link_prefix' => '',
            ],[
                'name' => 'Twitter',
                'slug' => 'twitter',
                'description' => 'Compte professionnel ou personnel, selon votre modèle.',
                'base_url' => 'https://twitter.com/',
                'link_prefix' => '',
            ],[
                'name' => 'TikTok',
                'slug' => 'tiktok',
                'description' => 'Votre compte tiktok',
                'base_url' => 'https://www.tiktok.com/',
                'link_prefix' => '',
            ],[
                'name' => 'Linkedin',
                'slug' => 'linkedin',
                'description' => 'Compte professionnel ou personnel, selon votre modèle.',
                'base_url' => 'https://www.linkedin.com/',
                'link_prefix' => '',
            ],[
                'name' => 'Github',
                'slug' => 'github',
                'description' => 'Votre compte github.',
                'base_url' => 'https://www.github.com/',
                'link_prefix' => '',
            ],[
                'name' => 'Site web',
                'slug' => 'site-web',
                'description' => 'Votre site web pour vos activités.',
                'base_url' => '',
                'link_prefix' => '',
            ],[
                'name' => 'Youtube',
                'slug' => 'youtube',
                'description' => 'Compte youtube',
                'base_url' => 'https://youtube.com/',
                'link_prefix' => '',
            ],[
                'name' => 'Vimeo',
                'slug' => 'vimeo',
                'description' => 'Compte vimeo',
                'base_url' => 'https://vimeo.com/',
                'link_prefix' => '',
            ],[
                'name' => 'Spotify',
                'slug' => 'spotify',
                'description' => 'Lien spotify',
                'base_url' => 'https://spotify.com/',
                'link_prefix' => '',
            ],[
                'name' => 'MySpace',
                'slug' => 'myspace',
                'description' => 'Réseau social de groupes de musique et de DJ',
                'base_url' => 'https://myspace.com/',
                'link_prefix' => '',
            ],[
                'name' => 'Bandcamp',
                'slug' => 'bandcamp',
                'description' => 'Bandcamp',
                'base_url' => 'https://bandcamp.com/',
                'link_prefix' => '',
            ],[
                'name' => '500px',
                'slug' => '500px',
                'description' => 'Réseau social de partage de photos',
                'base_url' => 'https://500px.com/',
                'link_prefix' => '',
            ],[
                'name' => 'Flickr',
                'slug' => 'flickr',
                'description' => 'Réseau social de partage de photos et de vidéos',
                'base_url' => 'https://flickr.com/',
                'link_prefix' => '',
            ],[
                'name' => 'Autre',
                'slug' => 'autre',
                'description' => 'Ajouter un compte / plateforme.',
                'base_url' => '',
                'link_prefix' => '',
            ]
        ];

        foreach($methods as $index => $method) {
            $current_method = ContactMethod::create($method);
        }
    }
}
