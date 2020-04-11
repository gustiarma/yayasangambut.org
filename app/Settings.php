<?php

use App\SiteOptions;
use Wink\WinkSiteOptions;
use Wink\WinkPost;
use Illuminate\Support\Str;


class Settings
{

    public function __construct()
    {
    }

    public static function excerpt($string){

        return Str::limit(strip_tags($string),150);
    }

    public static function opt($optionname, $default = null, $type = 'text', $location = null, $title = null, $description = null)
    {

        try {
            $data =  WinkSiteOptions::firstOrCreate(
                ['option_name' => $optionname],

                [
                    'id' => Str::uuid(),
                    'option_value' => ($default !== null) ? $default : $optionname
                ]
            );
            // $data = SiteOptions::firstOrCreate(
            //     ['name' => $optionname],
            //     [
            //         'value' => ($default !== null) ? $default : 'notset',
            //         'title' => $title,
            //         'location' => $location,
            //         'type' => $type,
            //         'default' => $default,
            //         'description' => $description,
            //     ]

            // );

            return $data->option_value;
        } catch (\Throwable $th) {
            return $th->getMessage();
            return 'null';
        }
    }

    public static function meta()
    {
        $meta = [];
        $routeName =  \Route::currentRouteName();
        switch ($routeName) {
            case 'homepage':
                $title = Settings::opt('websiteName', 'YayasanGambut.org') . Settings::opt('websiteTitleSeparator', ' - ') . Settings::opt('websiteTagline', 'Website Gambut Riau');
                $description = Settings::opt('websiteDescription', 'Deskripsi  tentang website');
                $featuredImage = Settings::opt('websiteFeaturedImage', asset('/image/featured.png'));
                $siteName = Settings::opt('websiteName', 'Nama website');
                $twitterAcc = Settings::opt('organizationTwitter', 'https://twitter.com/organizationTwitter');

                $url = url()->current();
                $meta[] = '<title>' . $title . '</title>';
                $meta[] = '<meta property="og:url" content="' . $url . '">';
                $meta[] = '<meta property="og:type" content="website">';
                $meta[] = '<meta property="og:title" content="' . $title . '">';
                $meta[] = '<meta property="og:image" content="' . $featuredImage . '">';

                $meta[] = '<meta property="og:description" content="' . $description . '">';
                $meta[] = '<meta property="og:site_name" content="' . $siteName . '">';
                $meta[] = '<meta property="og:locale" content="id_ID">';


                $meta[] = '<meta name="twitter:card" content="summary">';
                $meta[] = '<meta name="twitter:site" content="' . $twitterAcc . '">';
                $meta[] = '<meta name="twitter:url" content="' . $url . '">';
                $meta[] = '<meta name="twitter:title" content="' . $title . '">';
                $meta[] = '<meta name="twitter:description" content="' . $description . '">';
                $meta[] = '<meta name="twitter:image" content="' . $featuredImage . '">';




                break;

            default:
                # code...
                break;
        }

        return implode("\n", $meta);
    }

    public static function jsonLD()
    {
    }

    public static function orgInfoFooter()
    {
        $footerOrg = [];
        $prefix = '<li>';
        $suffix = '<li>';
        $footerOrg[] = $prefix . Settings::opt('organizationName') . $suffix;
        $footerOrg[] =  $prefix . Settings::opt('organizationAddress') . $suffix;
        $footerOrg[] =  $prefix . Settings::opt('organizationPhone') . $suffix;

        return implode("\n", $footerOrg);
    }
}
