<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdController extends Controller
{
    //
    public function os(Request $request) {
        $user_agent =  $request->header('User-Agent');
        if ((strpos($user_agent, 'iPhone') !== false)) {
            return redirect('https://preaf.jp/pa.do?s=v04031&o=47466&guid=ON'); //VI-VO - Preaf
            // return redirect('https://track.bannerbridge.net/click.php?APID=136868&affID=98211&siteID=189838'); //Jメール - バナブリ
            // return redirect('https://track.bannerbridge.net/click.php?APID=143797&affID=98211&siteID=189838'); //Jメール特単 - バナブリ
            // return redirect('https://trading-ad.net/lp/livede55/lady01/?pf=atrade&b=G16531'); //ライブでゴーゴー - Aトレード
        }
        return redirect('https://preaf.jp/pa.do?s=v04031&o=47466&guid=ON'); //VI-VO - Preaf
        // return redirect('https://trading-ad.net/lp/livede55/lady01/?pf=atrade&b=G16531'); //ライブでゴーゴー - Aトレード
        // return redirect('https://track.bannerbridge.net/click.php?APID=143797&affID=98211&siteID=189838'); //Jメール特単 - バナブリ
        // return redirect('https://track.bannerbridge.net/click.php?APID=136868&affID=98211&siteID=189838'); //Jメール - バナブリ
    }
}
