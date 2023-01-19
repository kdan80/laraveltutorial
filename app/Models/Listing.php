<?php
    namespace App\Models;

    class Listing {
        public static function all() {
            return [
                [
                    'id' => 1,
                    'title' => 'Listing One',
                    'description' => 'Sint cillum nostrud cillum est sit occaecat commodo magna voluptate. Esse in ex tempor anim cillum ad mollit mollit commodo ex velit proident. Sunt sit ut aliquip voluptate proident tempor irure occaecat nulla non do consequat officia dolor. Duis consectetur nulla cupidatat mollit proident enim velit mollit.'
                ],
                [
                    'id' => 2,
                    'title' => 'Listing Two',
                    'description' => 'Sint cillum nostrud cillum est sit occaecat commodo magna voluptate. Esse in ex tempor anim cillum ad mollit mollit commodo ex velit proident. Sunt sit ut aliquip voluptate proident tempor irure occaecat nulla non do consequat officia dolor. Duis consectetur nulla cupidatat mollit proident enim velit mollit.'
                ]
            ];
        }

        public static function find($id) {
            $listings = self::all();

            foreach($listings as $listing) {
                if($listing['id'] == $id){
                    return $listing;
                }
            }
        }
    }