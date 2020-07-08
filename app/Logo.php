<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Logo extends Model
{
    protected $guarded = [];

    //// =======  Truncate Tables ======== /////
    public function init_database()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('logos')->truncate();
        DB::table('partners')->truncate();
        DB::table('images')->truncate();
        DB::table('videos')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }


    public function getLogoByCatalog($catalog_id)
    {
        $result = DB::table('logos')->where('catalog', $catalog_id)
                                 ->where('active', 1)->first();

        if($result == null)
            return '';
        return $result->title;
    }

    public function getImageByCatalog($catalog_id)
    {
        $result = DB::table('images')->where('catalog', $catalog_id)
                                 ->where('active', 1)->first();

        if($result == null)
            return '';
        return $result->title;
    }

    public function getVideoByCatalog($catalog_id)
    {
        $result = DB::table('videos')->where('catalog', $catalog_id)
                                     ->where('active', 1)->first();

        if($result == null)
            return '';
        return $result->title;
    }

    public function getParnerList()
    {
        return DB::table('partners')
                    ->where('active', 1)
                    ->get();
    }

    public function getLogoBasePath($catalog_id)
    {
        $result = DB::table('logo_catalogs')->where('id', $catalog_id)
                                            ->first();

        if($result == null)
            return '';
        return $result->basic_path;
    }

    //////////// ============ Get Logo List ============ ///////////////////
    public function getAdminLogoList()
    {
        return DB::table('logos')
                    ->leftJoin('logo_catalogs', 'logos.catalog', '=', 'logo_catalogs.id')
                    ->where('media_type', "Logo")
                    ->select('logos.*', 'logo_catalogs.type' , 'logo_catalogs.basic_path')
                    ->get();
    }   

    public function getAdminImageList()
    {
        return DB::table('images')
                    ->leftJoin('logo_catalogs', 'images.catalog', '=', 'logo_catalogs.id')
                    ->where('media_type', "Image")
                    ->select('images.*', 'logo_catalogs.type' , 'logo_catalogs.basic_path')
                    ->get();
    }

    public function getAdminVideoList()
    {
        return DB::table('videos')
                    ->leftJoin('logo_catalogs', 'videos.catalog', '=', 'logo_catalogs.id')
                    ->where('media_type', 'Video')
                    ->select('videos.*', 'logo_catalogs.type', 'logo_catalogs.basic_path')
                    ->get();
    }

    public function getAdminPartnerlist()
    {
        return DB::table('partners')
                    ->get();
    }

    public function getAdminCatalogList($media_type)
    {
        return DB::table('logo_catalogs')->where('media_type', $media_type)
                                        ->get();
    }

    //////////////  =================   Logo Edit Part ================== //////////////////////

    public function addAdminLogo($param)
    {
        if($param['active'] == 1)
        {
            DB::table('logos')->where('catalog', $param['catalog'])
                            //   ->where('media_type', 'Logo')
                              ->update(['active' => 0,]);
        }
        DB::table('logos')->insert($param);
    }

    public function getLogo($logo_id)
    {
        return DB::table('logos')
                    ->where('logos.id', $logo_id)
                    ->leftJoin('logo_catalogs', 'logos.catalog', '=', 'logo_catalogs.id')
                    ->select('logos.*', 'logo_catalogs.type' , 'logo_catalogs.basic_path')
                    ->get();
    }
    
    public function updateAdminLogo($logo_id, $param)
    {
        if($param['active'] == 1)
        {
            DB::table('logos')->where('catalog', $param['catalog'])
                            //   ->where('media_type', 'Logo')
                              ->update(['active' => 0,]);
        }
        if($param['title'] == "")
        {
            DB::table('logos')->where('id', $logo_id)
                             ->update(['active' => $param['active']]);
        }
        else{
            DB::table('logos')->where('id', $logo_id)
                          ->update($param);
        }
    }

    public function removeLogo($logo_id)
    {
        DB::table('logos')->where('id', $logo_id)
                          ->delete();
    }

    //// ================  Logo Edit Part finish  ======================= ///

    //// ============== Image Edit Part Start ==============  /////
    public function addAdminImage($param)
    {
        if($param['active'] == 1)
        {
            DB::table('images')->where('catalog', $param['catalog'])
                            //   ->where('media_type', 'Image')
                              ->update(['active' => 0,]);
        }
        DB::table('images')->insert($param);
    }

    public function getImage($logo_id)
    {
        return DB::table('images')
                    ->where('images.id', $logo_id)
                    ->leftJoin('logo_catalogs', 'images.catalog', '=', 'logo_catalogs.id')
                    ->select('images.*', 'logo_catalogs.type' , 'logo_catalogs.basic_path')
                    ->get();
    }

    public function updateAdminImage($logo_id, $param)
    {
        if($param['active'] == 1)
        {
            DB::table('images')->where('catalog', $param['catalog'])
                            //   ->where('media_type', 'Image')
                              ->update(['active' => 0,]);
        }
        if($param['title'] == "")
        {
            DB::table('images')->where('id', $logo_id)
                             ->update(['active' => $param['active']]);
        }
        else{
            DB::table('images')->where('id', $logo_id)
                          ->update($param);
        }
    }

    public function removeImage($image_id)
    {
        DB::table('images')->where('id', $image_id)
                          ->delete();
    }
    //// ============== Image Edit Part Finish ==============  /////

    //// ============== Video Edit Part Start ==============  /////
    public function addAdminVideo($param)
    {
        if($param['active'] == 1)
        {
            DB::table('videos')->where('catalog', $param['catalog'])
                            //   ->where('media_type', 'Image')
                                ->update(['active' => 0,]);
        }
        DB::table('videos')->insert($param);
    }

    public function getVideo($logo_id)
    {
        return DB::table('videos')
                    ->where('videos.id', $logo_id)
                    ->leftJoin('logo_catalogs', 'videos.catalog', '=', 'logo_catalogs.id')
                    ->select('videos.*', 'logo_catalogs.type' , 'logo_catalogs.basic_path')
                    ->get();
    }

    public function updateAdminVideo($logo_id, $param)
    {
        if($param['active'] == 1)
        {
            DB::table('videos')->where('catalog', $param['catalog'])
                            //   ->where('media_type', 'Image')
                                ->update(['active' => 0,]);
        }
        if($param['title'] == "")
        {
            DB::table('videos')->where('id', $logo_id)
                                ->update(['active' => $param['active']]);
        }
        else{
            DB::table('videos')->where('id', $logo_id)
                            ->update($param);
        }
    }

    public function removeVideo($video_id)
    {
        DB::table('videos')->where('id', $video_id)
                            ->delete();
    }
    //// ============== Video Edit Part Finish ==============  /////

    //////////////  =================   Partner Edit Part ================== //////////////////////

    public function addAdminPartner($param)
    {
        DB::table('partners')->insert($param);
    }

    public function getPartner($partner_id)
    {
        return DB::table('partners')
                    ->where('id', $partner_id)
                    ->get();
    }

    public function updateAdminPartner($partner_id, $param)
    {
        if($param['title'] == "")
        {
            DB::table('partners')->where('id', $partner_id)
                                ->update(['active' => $param['active']]);
        }
        else{
            DB::table('partners')->where('id', $partner_id)
                            ->update($param);
        }
    }

    public function removePartner($partner_id)
    {
        DB::table('partners')->where('id', $partner_id)
                            ->delete();
    }

    //// ================  Partner Edit Part finish  ======================= ///
}