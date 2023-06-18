<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\akmens;
use App\Models\garsviela;
use App\Models\kartis;
use App\Models\kompanija;
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
        $lavender->kompanija()->associate($phoenix);
        $lavender->save();
        
        $vanilla = new garsviela();
        $vanilla->nosaukums = 'Vanilla';
        $vanilla->efekts = 'Can reduce anxiety, promote relaxation, and improve mood';
        $vanilla->skaits = 45;
        $vanilla->cena = 18.99;
        $vanilla->smarza()->associate($warm);
        $vanilla->kompanija()->associate($enterprise);
        $vanilla->save();

        $fresh = smarza::where('apraksts', 'Fresh, herbaceous, and slightly earthy with a touch of lemon')->first();
        $fennel = new garsviela();
        $fennel->nosaukums = 'Fennel';
        $fennel->efekts = 'Can improve digestion, reduce inflammation, and boost immune function';
        $fennel->skaits = 5;
        $fennel->cena = 14.99;
        $fennel->smarza()->associate($fresh);
        $fennel->kompanija()->associate($veritas);
        $fennel->save();
        
        $sage = new garsviela();
        $sage->nosaukums = 'Sage';
        $sage->efekts = 'Can improve memory and cognitive function, reduce inflammation, and soothe sore throat';
        $sage->skaits = 45;
        $sage->cena = 18.99;
        $sage->smarza()->associate($fresh);
        $sage->kompanija()->associate($veritas);
        $sage->save();

        zodiaks::create(['Nosaukums' => 'Aries']);
        $aries = zodiaks::where('Nosaukums', 'Aries')->first();
        zodiaks::create(['Nosaukums' => 'Taurus']);
        $taurus = zodiaks::where('Nosaukums', 'Taurus')->first();
        zodiaks::create(['Nosaukums' => 'Gemini']);
        $gemini = zodiaks::where('Nosaukums', 'Gemini')->first();
        zodiaks::create(['Nosaukums' => 'Cancer']);
        $cancer = zodiaks::where('Nosaukums', 'Cancer')->first();
        zodiaks::create(['Nosaukums' => 'Leo']);
        $leo = zodiaks::where('Nosaukums', 'Leo')->first();
        zodiaks::create(['Nosaukums' => 'Virgo']);
        $virgo = zodiaks::where('Nosaukums', 'Virgo')->first();
        zodiaks::create(['Nosaukums' => 'Libra']);
        $libra = zodiaks::where('Nosaukums', 'Libra')->first();
        zodiaks::create(['Nosaukums' => 'Scorpio']);
        $scorpio = zodiaks::where('Nosaukums', 'Scorpio')->first();
        zodiaks::create(['Nosaukums' => 'Saggitarius']);
        $saggitarius = zodiaks::where('Nosaukums', 'Saggitarius')->first();
        zodiaks::create(['Nosaukums' => 'Capricorn']);
        $capricorn = zodiaks::where('Nosaukums', 'Capricorn')->first();
        zodiaks::create(['Nosaukums' => 'Aquarius']);
        $aquarius = zodiaks::where('Nosaukums', 'Aquarius')->first();
        zodiaks::create(['Nosaukums' => 'Pisces']);
        $pisces = zodiaks::where('Nosaukums', 'pisces')->first();
        
        $quartz = new akmens();
        $quartz->nosaukums = 'Clear quartz';
        $quartz->efekts = 'Healing';
        $quartz->skaits = 45;
        $quartz->cena = 18.99;
        $quartz->zodiaks()->create($aries);
        $quartz->razo()->associate($solaris);
        $quartz->save();

        $fluorite = new akmens();
        $fluorite->nosaukums = 'Rainbow Fluorite';
        $fluorite->efekts = 'Focus';
        $fluorite->skaits = 45;
        $fluorite->cena = 18.99;
        $fluorite->zodiaks()->associate($taurus);
        $fluorite->razo()->associate($solaris);
        $fluorite->save();

        $labradorite = new akmens();
        $labradorite->nosaukums = 'Labradorite';
        $labradorite->efekts = 'Intellect';
        $labradorite->skaits = 45;
        $labradorite->cena = 18.99;
        $labradorite->zodiaks()->associate($gemini);
        $labradorite->razo()->associate($zenith);
        $labradorite->save();

        $malachite = new akmens();
        $malachite->nosaukums = 'Malachite';
        $malachite->efekts = 'Attracting Prosperity';
        $malachite->skaits = 45;
        $malachite->cena = 18.99;
        $malachite->zodiaks()->associate($cancer);
        $malachite->razo()->associate($zenith);
        $malachite->save();

        $lapis = new akmens();
        $lapis->nosaukums = 'Lapis Lazuli';
        $lapis->efekts = 'Grounding and Protection';
        $lapis->skaits = 45;
        $lapis->cena = 18.99;
        $lapis->zodiaks()->associate($leo);
        $lapis->razo()->associate($veritas);
        $lapis->save();

        $charoite = new akmens();
        $charoite->nosaukums = 'Charoite';
        $charoite->efekts = 'Revealing Truth';
        $charoite->skaits = 45;
        $charoite->cena = 18.99;
        $charoite->zodiaks()->associate($virgo);
        $charoite->razo()->associate($veritas);
        $charoite->save();

        $lepidolite = new akmens();
        $lepidolite->nosaukums = 'Lepidolite';
        $lepidolite->efekts = 'Decision-Making';
        $lepidolite->skaits = 45;
        $lepidolite->cena = 18.99;
        $lepidolite->zodiaks()->associate($libra);
        $lepidolite->razo()->associate($enterprise);
        $lepidolite->save();

        $red_tiger = new akmens();
        $red_tiger->nosaukums = 'Red Tiger Eye';
        $red_tiger->efekts = 'Manifestation';
        $red_tiger->skaits = 45;
        $red_tiger->cena = 18.99;
        $red_tiger->zodiaks()->associate($scorpio);
        $red_tiger->razo()->associate($enterprise);
        $red_tiger->save();

        $jasper = new akmens();
        $jasper->nosaukums = 'Red Jasper';
        $jasper->efekts = 'Change';
        $jasper->skaits = 45;
        $jasper->cena = 18.99;
        $jasper->zodiaks()->associate($saggitarius);
        $jasper->razo()->associate($terranova);
        $jasper->save();

        $celestite = new akmens();
        $celestite->nosaukums = 'Celestite';
        $celestite->efekts = 'Grounding';
        $celestite->skaits = 45;
        $celestite->cena = 18.99;
        $celestite->zodiaks()->associate($capricorn);
        $celestite->razo()->associate($terranova);
        $celestite->save();

        $kyanite = new akmens();
        $kyanite->nosaukums = 'Blue Kyanite';
        $kyanite->efekts = 'Communication';
        $kyanite->skaits = 45;
        $kyanite->cena = 18.99;
        $kyanite->zodiaks()->associate($aquarius);
        $kyanite->razo()->associate($phoenix);
        $kyanite->save();

        $tiger = new akmens();
        $tiger->nosaukums = 'Tiger Eye';
        $tiger->efekts = 'Confidence';
        $tiger->skaits = 45;
        $tiger->cena = 18.99;
        $tiger->zodiaks()->associate($pisces);
        $tiger->razo()->associate($phoenix);
        $tiger->save();

        $tiger = new kartis();
        $tiger->nosaukums = 'The Fool';
        $tiger->efekts = 'Minor Arcana';
        $tiger->skaits = 45;
        $tiger->cena = 18.99;
        $tiger->razo()->associate($phoenix);
        $tiger->save();

        $tiger = new kartis();
        $tiger->nosaukums = 'Four of Swords';
        $tiger->efekts = 'Major Arcana';
        $tiger->skaits = 45;
        $tiger->cena = 18.99;
        $tiger->razo()->associate($veritas);
        $tiger->save();

        $tiger = new kartis();
        $tiger->nosaukums = 'The Tower band';
        $tiger->efekts = 'Minor Arcana';
        $tiger->skaits = 45;
        $tiger->cena = 18.99;
        $tiger->razo()->associate($enterprise);
        $tiger->save();

        $tiger = new kartis();
        $tiger->nosaukums = 'The Chariot, Quantity';
        $tiger->efekts = 'Major Arcana';
        $tiger->skaits = 45;
        $tiger->cena = 18.99;
        $tiger->razo()->associate($apex);
        $tiger->save();

        $tiger = new kartis();
        $tiger->nosaukums = 'Six of Wands';
        $tiger->efekts = 'Major Arcana';
        $tiger->skaits = 45;
        $tiger->cena = 18.99;
        $tiger->razo()->associate($solaris);
        $tiger->save();

        $tiger = new kartis();
        $tiger->nosaukums = 'The Empress';
        $tiger->efekts = 'Minor Arcana';
        $tiger->skaits = 45;
        $tiger->cena = 18.99;
        $tiger->razo()->associate($atlas);
        $tiger->save();

    }
}
