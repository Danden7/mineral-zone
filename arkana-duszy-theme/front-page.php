<?php
get_header();
?>

<section class="hero" id="odczyt">
  <div class="hero-content">
    <p class="eyebrow">Indywidualne odczyty duchowe</p>
    <h1>Arkana Duszy</h1>
    <p class="hero-subtitle">
      Mistyka, symbole i archetypy przełożone na praktyczne wskazówki dla Twojej
      codzienności. Otrzymasz odczyt w formie eleganckiego e-booka PDF.
    </p>
    <div class="hero-actions">
      <button class="primary" type="button">Zamów Odczyt Duszy</button>
      <button class="ghost" type="button">Przeczytaj Artykuły</button>
    </div>
  </div>
  <div class="hero-card">
    <h2>Co otrzymasz?</h2>
    <ul>
      <li>Spersonalizowany odczyt duszy na podstawie danych urodzeniowych.</li>
      <li>PDF z podziałem na część mistyczną i psychologiczną.</li>
      <li>Praktyczne wskazówki na najbliższe miesiące.</li>
    </ul>
    <div class="hero-note">Czas realizacji: do 5 dni roboczych.</div>
  </div>
</section>

<section class="section" id="proces">
  <div class="section-header">
    <h2>Jak działa zamówienie?</h2>
    <p>Prosty i przejrzysty proces od zamówienia do wysyłki PDF.</p>
  </div>
  <div class="steps">
    <article>
      <h3>1. Wypełnij formularz</h3>
      <p>Podaj imię, datę i godzinę urodzenia oraz miejsce urodzenia.</p>
    </article>
    <article>
      <h3>2. Opłać zamówienie</h3>
      <p>Po płatności otrzymasz potwierdzenie na e-mail.</p>
    </article>
    <article>
      <h3>3. Odbierz PDF</h3>
      <p>Gotowy odczyt dostaniesz w ciągu 5 dni roboczych.</p>
    </article>
  </div>
</section>

<section class="section" id="sciezki">
  <div class="section-header">
    <h2>Główne ścieżki odczytu</h2>
    <p>W każdym raporcie znajdują się cztery kluczowe obszary pracy z duszą.</p>
  </div>
  <div class="grid">
    <div class="tile">
      <span>E-book PDF</span>
      <h3>Kompletny raport</h3>
    </div>
    <div class="tile">
      <span>Część Mistyczna</span>
      <h3>Archetypy i symbole</h3>
    </div>
    <div class="tile">
      <span>Część Psychologiczna</span>
      <h3>Emocje i relacje</h3>
    </div>
    <div class="tile">
      <span>Konkretne wskazówki</span>
      <h3>Praktyka na co dzień</h3>
    </div>
  </div>
</section>

<section class="section order" id="kontakt">
  <div class="section-header">
    <h2>Zamów odczyt</h2>
    <p>
      Wypełnij formularz, aby zamówić odczyt duszy. Po opłaceniu otrzymasz mail z
      potwierdzeniem, a PDF dostarczymy w ciągu 5 dni roboczych.
    </p>
  </div>
  <form class="order-form">
    <label>
      Imię i nazwisko
      <input type="text" name="name" placeholder="np. Anna Kowalska" required />
    </label>
    <label>
      Data urodzenia
      <input type="date" name="birthdate" required />
    </label>
    <label>
      Godzina urodzenia
      <input type="time" name="birthtime" required />
    </label>
    <label>
      Miejsce urodzenia
      <input type="text" name="birthplace" placeholder="np. Kraków" required />
    </label>
    <label>
      Adres e-mail
      <input type="email" name="email" placeholder="np. anna@email.pl" required />
    </label>
    <button type="submit">Przejdź do płatności</button>
    <p class="fineprint">
      Klikając przycisk, potwierdzasz zamówienie. Odczyt zostanie dostarczony jako
      PDF na podany e-mail w ciągu 5 dni roboczych.
    </p>
  </form>
</section>

<section class="section" id="opinie">
  <div class="section-header">
    <h2>Opinie klientów</h2>
    <p>Każdy odczyt jest tworzony indywidualnie i z troską o detale.</p>
  </div>
  <div class="testimonials">
    <article>
      <p>
        „Odczyt był niezwykle trafny. Dostałam konkretne wskazówki i poczułam
        spokój.”
      </p>
      <span>Monika, Warszawa</span>
    </article>
    <article>
      <p>
        „Piękny język i subtelne prowadzenie. PDF ma świetną strukturę.”
      </p>
      <span>Kasia, Gdańsk</span>
    </article>
    <article>
      <p>
        „Czułam, że ktoś naprawdę mnie zrozumiał. Polecam każdemu.”
      </p>
      <span>Łukasz, Poznań</span>
    </article>
  </div>
</section>

<?php
get_footer();
?>
