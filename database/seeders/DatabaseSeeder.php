<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\akmens;
use App\Models\garsviela;
use App\Models\kartis;
use App\Models\kompanija;
use App\Models\pirkums;
use App\Models\smarza;
use App\Models\valsts;
use App\Models\zodiaks;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        valsts::create(['nosaukums' => 'Albānija']);
        valsts::create(['nosaukums' => 'Austrija']);
        valsts::create(['nosaukums' => 'Beļģija']);
        valsts::create(['nosaukums' => 'Francija']);
        valsts::create(['nosaukums' => 'Grieķija']);

        $albanija = valsts::where('nosaukums', 'Albānija')->first();
        $enterprise = new kompanija();
        $enterprise->nosaukums = 'Aquablue Enterprise';
        $enterprise->valsts()->associate($albanija);
        $enterprise->save();
       
        $veritas = new kompanija();
        $veritas->nosaukums = 'Veritas Solutions';
        $veritas->valsts()->associate($albanija);
        $veritas->save();


        $austrija = valsts::where('nosaukums', 'Austrija')->first();
        $solaris = new kompanija();
        $solaris->nosaukums = 'Solaris Innovations';
        $solaris->valsts()->associate($austrija);
        $solaris->save();

        $zenith = new kompanija();
        $zenith->nosaukums = 'Zenith Ventures';
        $zenith->valsts()->associate($austrija);
        $zenith->save();
        

        $belgija = valsts::where('nosaukums', 'Beļģija')->first();
        $terranova = new kompanija();
        $terranova->nosaukums = 'TerraNova Industries';
        $terranova->valsts()->associate($belgija);
        $terranova->save();

        $phoenix = new kompanija();
        $phoenix->nosaukums = 'Phoenix Rising Technologies';
        $phoenix->valsts()->associate($belgija);
        $phoenix->save();


        $francija = valsts::where('nosaukums', 'Francija')->first();
        $horizon = new kompanija();
        $horizon->nosaukums = 'Horizon Global';
        $horizon->valsts()->associate($francija);
        $horizon->save();

        $apex = new kompanija();
        $apex->nosaukums = 'Apex Solutions';
        $apex->valsts()->associate($francija);
        $apex->save();


        $griekija = valsts::where('nosaukums', 'Grieķija')->first();
        $atlas = new kompanija();
        $atlas->nosaukums = 'Atlas Enterprises';
        $atlas->valsts()->associate($griekija);
        $atlas->save();

        $avantgarde = new kompanija();
        $avantgarde->nosaukums = 'Avantgarde Industries';
        $avantgarde->valsts()->associate($griekija);
        $avantgarde->save();

        smarza::create(['apraksts' => 'Warm and sweet with hints of spice and vanilla']);
        smarza::create(['apraksts' => 'Fresh, herbaceous, and slightly earthy with a touch of lemon']);


        $warm = smarza::where('apraksts', 'Warm and sweet with hints of spice and vanilla')->first();
        $lavender = new garsviela();
        $lavender->nosaukums = 'Lavender';
        $lavender->efekts = 'Can reduce stress and anxiety, improve sleep, and promote relaxation';
        $lavender->skaits = 5;
        $lavender->cena = 14.99;
        $lavender->smarza()->associate($warm);
        $lavender->save();
        
        $vanilla = new garsviela();
        $vanilla->nosaukums = 'Vanilla';
        $vanilla->efekts = 'Can reduce anxiety, promote relaxation, and improve mood';
        $vanilla->skaits = 45;
        $vanilla->cena = 18.99;
        $vanilla->smarza()->associate($warm);
        $vanilla->save();

        $fresh = smarza::where('apraksts', 'Fresh, herbaceous, and slightly earthy with a touch of lemon')->first();
        $fennel = new garsviela();
        $fennel->nosaukums = 'Fennel';
        $fennel->efekts = 'Can improve digestion, reduce inflammation, and boost immune function';
        $fennel->skaits = 5;
        $fennel->cena = 14.99;
        $fennel->smarza()->associate($fresh);
        $fennel->save();
        
        $sage = new garsviela();
        $sage->nosaukums = 'Sage';
        $sage->efekts = 'Can improve memory and cognitive function, reduce inflammation, and soothe sore throat';
        $sage->skaits = 45;
        $sage->cena = 18.99;
        $sage->smarza()->associate($fresh);
        $sage->save();

        

    }
}
