<?php

use BlackCMS\Setting\Models\Setting;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $theme = Theme::getThemeName();

        $socialLinks = [];

        if (theme_option("facebook")) {
            $socialLinks[] = [
                [
                    "key" => "social-name",
                    "value" => "Facebook",
                ],
                [
                    "key" => "social-icon",
                    "value" => "lab la-facebook la-2x",
                ],
                [
                    "key" => "social-url",
                    "value" => theme_option("facebook"),
                ],
            ];
        }

        if (theme_option("twitter")) {
            $socialLinks[] = [
                [
                    "key" => "social-name",
                    "value" => "Twitter",
                ],
                [
                    "key" => "social-icon",
                    "value" => "lab la-twitter la-2x",
                ],
                [
                    "key" => "social-url",
                    "value" => theme_option("twitter"),
                ],
            ];
        }

        if (theme_option("instagram")) {
            $socialLinks[] = [
                [
                    "key" => "social-name",
                    "value" => "Instagram",
                ],
                [
                    "key" => "social-icon",
                    "value" => "lab la-instagram la-2x",
                ],
                [
                    "key" => "social-url",
                    "value" => theme_option("instagram"),
                ],
            ];
        }

        if (theme_option("youtube")) {
            $socialLinks[] = [
                [
                    "key" => "social-name",
                    "value" => "Youtube",
                ],
                [
                    "key" => "social-icon",
                    "value" => "lab la-youtube la-2x",
                ],
                [
                    "key" => "social-url",
                    "value" => theme_option("youtube"),
                ],
            ];
        }

        if (count($socialLinks)) {
            Setting::insertOrIgnore([
                "key" => "theme-" . $theme . "-social_links",
                "value" => json_encode($socialLinks),
            ]);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
