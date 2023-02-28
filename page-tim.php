<?php get_header(); ?>

<main class="team-main">
  <!-- page indicator component -->
 <?php get_template_part('template-parts/content', 'page-indicator') ?>
  <!----------------------->
      <div class="container">
        <!-- intro section -->
        <section class="intro mb-3">
          <h2 class="intro__heading h2--heading">par uvodnih riječi...</h2>
          <p class="intro__paragraph">
            Udruga Slap tijekom dugogodišnjeg djelovanja u svoj tim uključila je
            brojne stručnjake iz područja financija, marketinga, poduzetništva s
            naglaskom na društveno poduzetništvo, projektnog menadžmenta, IT
            tehnologija i dr. Uži tim se u pravilu sastoji od pet do šest
            zaposlenika dok se, ovisno o traženim ekspertizama, angažiraju
            stručnjaci prema njihovim kompetencijama. <br />
            <br />
            <p class="intro__paragraph">Politika upravljanja ljudskim resursima omogućuje osobni i
            profesionalni razvoj svakog zaposlenika individualno te se time
            stvara ugodna i poticajna atmosfera za rad. Ovisno o interesima
            zaposlenika, isti se uključuju u projektne aktivnosti te sudjeluju u
            razvoju programa Udruge sukladno viziji. Također, zaposlenici
            sudjeluju na brojnim konferencijama i okruglim stolovima kao
            panelisti i predavači, a sve s ciljem promicanja rada Udruge.</p>
          </p>
        </section>
        <!----------------------->
        <!-- team profile section-->
        <section class="team">
          <h2 class="team__heading h2--heading text-center">Članovi Slapa</h2>
          <div class="team__wrapper d-grid">
            <div class="team-card p-2 d-grid hidden">
              <img src="<?php echo get_theme_file_uri('/assets/images/avatars/sonja-vuković.png') ?>" alt="team member" class="team-card__avatar">
              <h3 class="team-card__name">sonja vuković</h3>
              <h4 class="team-card__role">Programska je koordinatorica i predsjednica Udruge.</h4>
              <p>S jasnom vizijom osnovala je Slap 2000. Godine pod krilaticom: „Zašto biti kap kad možeš biti Slap“.
                Sonja je diplomirana ekonomistica s više od 30 godina iskustva u pripremi i vođenju treninga na teme
                upravljanja ljudskim potencijalima, time managementa te pripreme i apliciranja projektnih ideja.</p>
            </div>
            <div class="team-card p-2 d-grid hidden">
              <img src="<?php echo get_theme_file_uri('/assets/images/avatars/ana-lamza.png') ?>" alt="team member" class="team-card__avatar">
              <h3 class="team-card__name">ana lamza bašić</h3>
              <h4 class="team-card__role">Voditeljica je marketinga, kreira i provodi marketinške aktivnosti te na taj način
                promovira rad Udruge.</h4>
              <p class="mb-1">Ana je magistra kulturologije i kulturalnog menadžmenta koja više od 8 godina aktivno sudjeluje u
                organizaciji događaja i provedbi marketinških aktivnosti.</p>
                <ul class="team-card__interests">
                  <h5 class="team-card__interests-heading">interesi</h5>
                  <div class="team-card__interests-wrapper">
                    <li class="team-card__interest">dizajn</li>
                    <li class="team-card__interest">šivanje</li>
                    <li class="team-card__interest">žongliranje</li>
                    <li class="team-card__interest">čitanje</li>
                  </div>
                </ul>
            </div>
            <div class="team-card p-2 d-grid hidden">
              <img src="<?php echo get_theme_file_uri('/assets/images/avatars/female.png') ?>" alt="team member" class="team-card__avatar">
              <h3 class="team-card__name">dragana lisjak</h3>
              <h4 class="team-card__role">Voditeljica je ureda koja uz vođenje uredskog poslovanja, sudjeluje u pripremi
                dokumentacije za apliciranje projektnih prijava te u koordinaciji tekućih projektnih aktivnosti.</h4>
              <p class="mb-1">Dragana je magistra financijskog menadžmenta te je trenutno na poslijediplomskom specijalističkom
                studiju računovodstvo, revizija i analiza.</p>
                <ul class="team-card__interests">
                  <h5 class="team-card__interests-heading">interesi</h5>
                  <div class="team-card__interests-wrapper">
                    <li class="team-card__interest">Financijsko upravljanje</li>
                    <li class="team-card__interest">Motori</li>
                    <li class="team-card__interest">Upravljanje ljudskim resursima</li>
                    <li class="team-card__interest">Treninzi</li>
                    <li class="team-card__interest">Analiza</li>
                  </div>
                </ul>
            </div>
            <div class="team-card p-2 d-grid hidden">
              <img src="<?php echo get_theme_file_uri('/assets/images/avatars/female.png') ?>" alt="team member" class="team-card__avatar">
              <h3 class="team-card__name">Tatjana Ordanić</h3>
              <h4 class="team-card__role">Projektna je koordinatorica koja dugi niz godina sudjeluje u razvoju programa Slapa
                te koordinaciji poljoprivrednih proizvođača i volonterskih aktivnosti.</h4>
              <p class="mb-1">Tatjana (Tanja) je diplomirana inženjerka agronomije s dugogodišnjim iskustvom u neprofitnom
                sektoru. Tijekom godina, Tanja je sudjelovala u pripremi i provedbi brojnih treninga.</p>
                <ul class="team-card__interests">
                  <h5 class="team-card__interests-heading">interesi</h5>
                  <div class="team-card__interests-wrapper">
                    <li class="team-card__interest">Ekološka poljoprivreda</li>
                  </div>
                </ul>
            </div>
            <div class="team-card p-2 d-grid hidden">
              <img src="<?php echo get_theme_file_uri('/assets/images/avatars/female.png') ?>" alt="team member" class="team-card__avatar">
              <h3 class="team-card__name">snježana kralj</h3>
              <h4 class="team-card__role">Voditeljica je financijskog poslovanja Udruge i sudjeluje u pripremi financijskih
                projekcija te budžetiranju projektnih troškova.</h4>
              <p class="mb-1">Snježana (Žana) je diplomirana ekonomistica koja od samih početaka Udruge sudjeluje u razvoju
                programa te praćenju financijske</p>
                <ul class="team-card__interests">
                  <h5 class="team-card__interests-heading">interesi</h5>
                  <div class="team-card__interests-wrapper">
                    <li class="team-card__interest">avengeri</li>
                  </div>
                </ul>
            </div>
          </div>
        </section>
      </div>
    </main>

<?php get_footer(); ?>
