<?php

return [
    /**
     * Type can either be 'xml' or 'fake'
     * xml: retrieve news articles from a static xml file
     * fake: generate fake news articles using faker
     */
    'type' => env('NEWS_TYPE', 'fake'),
    'xml' => database_path('wordpress.xml'),

    'authors' => [
        ':blog-boerma:' => [
            'name' => 'Arjan Boerma',
            'content' => '<div class="blogbio" style="min-height:163px;"><img class="blogpic" src="https://old.professorfrancken.nl/wordpress/wp-content/uploads/2011/09/boerma.jpg" alt=""><h4>Wie is Arjan?</h4><p><a href="mailto:boerma@professorfrancken.nl">Arjan Boerma</a> is vijfdejaars student technische natuurkunde en oud-secretaris van Francken. Dit jaar is hij student-lid van het opleidingsbestuur en geeft hij ons eens in de maand een kijkje in de keuken van de <em>School of Science and Technology</em>.</p></div>',
            'image' => "https://old.professorfrancken.nl/wordpress/wp-content/uploads/2011/09/boerma.jpg",
        ],
        ':blog-mark:' => [
            'name' => 'Mark Schenkel',
            'content' => '<div class="blogbio" style="min-height:150px;"><img class="blogpic" src="https://old.professorfrancken.nl/wordpress/media/images/weblog/mark.jpg"style=\'height:150px;\' alt=""><h4>Wie is Mark?</h4><p>Mark was in het jaar 2007-2008 voorzitter van Francken. Na onderzoek bij Materials Science en zijn stage in de Verenigde Staten is hij begonnen bij Shell. Daar heeft hij het twee-jarige <em>Graduate Development Program</em> doorlopen en werkt nu al bijna vier jaar als <em>petrophysicist</em> en projectmanager.</p></div>',
            'image' => "https://old.professorfrancken.nl/wordpress/media/images/weblog/mark.jpg",
        ],
        ':blog-jabs:' => [
            'name' => 'Jasper van den Berg',
            'content' => '<div class="blogbio" style="min-height:163px;"><img class="blogpic" src="https://old.professorfrancken.nl/wordpress/media/images/weblog/jabs.png" alt=""><h4>Wie is Jasper?</h4><p>Jasper was in het jaar 2006-2007 penningmeester van Francken. Hij heeft stage gelopen in de Verenigde Staten en is afgestudeerd bij de vakgroep <em>physics of nanodevices</em>. In diezelfde groep is hij begin 2011 begonnen met zijn promotie-onderzoek. Om een beeld te geven van wat je als promovendus doet schrijft Jasper hier elke maand een blog over.</p></div>',
            'image' => "https://old.professorfrancken.nl/wordpress/media/images/weblog/jabs.png",
        ],
        ':blog-bosch:' => [
            'name' => 'Jasper Bosch',
            'content' => '<div class="blogbio" style="min-height:163px;"><img class="blogpic" src="https://old.professorfrancken.nl/wordpress/media/images/weblog/bosch.png" alt=""><h4>Wie is Jasper?</h4><p>Jasper was in het jaar 2010-2011 de voorzitter van Francken. Als kersverse Wijze Heer probeert hij met deze weblog een kijkje te geven in het leven van een master­student/student­assistent.</p></div>',
            'image' => "https://old.professorfrancken.nl/wordpress/media/images/weblog/bosch.png",
        ],
        ':blog-edwin:' => [
            'name' => 'Edwin de Jong',
            'content' => '<div class="blogbio" style="min-height:200px;"><img class="blogpic" src="https://old.professorfrancken.nl/wordpress/media/images/weblog/edwin.png" alt=""><h4>Wie is Edwin?</h4><p>Edwin is vijfdejaarsstudent technische natuurkunde en is sinds 8 juni 2011 de voorzitter van T.F.V. ‘Professor Francken’. De afgelopen jaren was hij veel te vinden in de ledenkamer en heeft hij onder andere de buitenlandse reis naar Praag, Boedapest en Wenen georganiseerd.</p></div>',
            'image' => "https://old.professorfrancken.nl/wordpress/media/images/weblog/edwin.png",
        ],
        ':blog-blok:' => [
            'name' => 'Sander Blok',
            'content' => '<div class="blogbio" style="min-height:175px;"><img class="blogpic" src="https://old.professorfrancken.nl/wordpress/media/images/weblog/blok.png" alt=""><h4>Wie is Sander?</h4><p>Sander heeft een bachelor scheikunde, maar in een poging zijn leven te beteren is hij overgestapt naar de topmaster nanoscience. Momenteel is hij bezig met zijn afstudeeronderzoek in de vakgroep <em>Physics of Nanodevices</em>. In zijn weblog geeft hij een kijkje achter de schermen in de wereld van de \'kleine dingetjes\'.</p></div>',
            'image' => "https://old.professorfrancken.nl/wordpress/media/images/weblog/blok.png",
        ],
        ':blog-plus:' => [
            'name' => 'Paulus Meesen',
            'content' => '<div class="blogbio" style="min-height:175px; "><img class="blogpic" src="https://old.professorfrancken.nl/wordpress/media/images/weblog/plus.png" alt=""><h4>Wie is Paulus?</h4><p>Paulus studeert Technische Wiskunde en is afgelopen jaar adviserend lid in het bestuur van de faculteit wiskunde en natuurwetenschappen geweest. Daarnaast zit hij in de s[ck]rip(t|t?c)ie en heeft hij het symposium \'The Nature of Physics\' georganiseerd.</p></div>',
            'image' => "https://old.professorfrancken.nl/wordpress/media/images/weblog/plus.png",
        ],
        ':blog-tom:' => [
            'name' => 'Tom Bosma',
            'content' => '<div class="blogbio" style="min-height:200px;"><img class="blogpic" src="https://old.professorfrancken.nl/wordpress/media/images/weblog/tom.png" alt=""><h4>Wie is Tom?</h4><p>Tom is vierdejaarsstudent technische natuurkunde en was de voorzitter van T.F.V. ‘Professor Francken’ 2012/2013. Ook heeft hij onder andere het symposium \'The Nature of Physics\' en Pienter 2011 georganiseerd.</p></div>',
            'image' => "https://old.professorfrancken.nl/wordpress/media/images/weblog/tom.png",
        ],
        ':blog-hilbertjr:' => [
            'name' => 'Hilbert van Loo',
            'content' => '<div class="blogbio" style="min-height:200px;"><img class="blogpic" src="https://old.professorfrancken.nl/wordpress/wp-content/uploads/2015/01/Brouwcie.png" width=\'300\' alt=""><h4>Wie is Hilbert?</h4><p>Hilbert is vijfdejaarsstudent technische natuurkunde. In 2014-2015 heeft hij de functie van voorzitter vervuld in het bestuur en sindsdien ook trots lid van de mooiste commissie van Francken: de Brouwcie.</p></div>',
            'image' => "https://old.professorfrancken.nl/wordpress/wp-content/uploads/2015/01/Brouwcie.png",
        ],
        ':blog-rudy:' => [
            'name' => 'Rudy Schuitema',
            'content' => '<div class="blogbio" style="min-height:200px;"><img class="blogpic" src="https://old.professorfrancken.nl/wordpress/media/images/weblog/rudy.png" alt=""><h4>Wie is Rudy?</h4><p>In het academisch jaar 2006-2007 was Rudy voorzitter van T.F.V. \'Professor Francken\'. Sinds zijn afstuderen werkt hij bij Philips Advanced Technology in Drachten. Gelukkig weerhoudt dat hem er niet van om nog dikwijls op vrijdagmiddag samen met een paar collega\'s het weekend in te luiden in de Franckenkamer.</p></div>',
            'image' => "https://old.professorfrancken.nl/wordpress/media/images/weblog/rudy.png",
        ],
        ':blog-marten:' => [
            'name' => 'Marten Koopmans',
            'content' => '<div class="blogbio" style="min-height:150px;"><img class="blogpic" height="150px" src="https://old.professorfrancken.nl/wordpress/media/images/weblog/marten.jpg" alt=""><h4>Wie is Marten?</h4><p>Marten is derdejaarsstudent technische natuurkunde. Daarnaast is hij fractielid van de Studentenorganisatie Groningen (SOG).</p></div>',
            'image' => "https://old.professorfrancken.nl/wordpress/media/images/weblog/marten.jpg",
        ],
        ':blog-jacobse:' => [
            'name' => 'Peter Jacobse',
            'content' => '<div class="blogbio" style="min-height:150px;"><img class="blogpic" height="150px" src="https://old.professorfrancken.nl/wordpress/media/images/weblog/peter.png" alt=""><h4>Wie is Peter?</h4><p>Na drie jaar scheikunde gestudeerd te hebben, besloot Peter dat natuurkunde toch leuker was. Hij besloot te switchen van studie en momenteel is hij bezig met zijn master Nanoscience in Utrecht. Voordat Peter naar Utrecht vertrok, heeft hij nog veel bijgedragen aan de vereniging. Zo is hij voorzitter geweest van de Sympcie en zat hij in de Istanbul-Buixie. Ook verschijnt hij nog regelmatig op borrels en activiteiten.</p></div>',
            'image' => "https://old.professorfrancken.nl/wordpress/media/images/weblog/peter.png",
        ],
        ':blog-bram:' => [
            'name' => 'Bram Lap',
            'content' => '<div class="blogbio" style="min-height:200px;"><img class="blogpic" src="https://old.professorfrancken.nl/wordpress/media/images/weblog/Bram.png" alt=""><h4>Wie is Bram?</h4><p>Bram is een derdejaarsstudent sterrenkunde en heeft meerdere commissies gedaan. Hij is voorzitter geweest van de Pientercommissie en hij was vorig jaar penningmeester van de Sympcie. Dit jaar is hij adviserend student-lid van het Faculteitsbestuur, waar hij heel actief mee bezig is.</p></div>',
            'image' => "https://old.professorfrancken.nl/wordpress/media/images/weblog/Bram.png",
        ],
        ':blog-wessel:' => [
            'name' => 'Wessel Douma',
            'content' => '<div class="blogbio" style="min-height:150px;"><img class="blogpic" style="height:150px;" src="https://old.professorfrancken.nl/wordpress/media/images/weblog/wessel.png" alt=""><h4>Wie is Wessel?</h4><p>Wessel is inmiddels tweedejaars en heeft in zijn eerstejaars de nobele taak van Buixie-eerstejaars op zich genomen. Dit jaar helpt hij eerstejaars als lid van de oefensescie. Verder is hij actief surfer, zowel op het water als op het internet.</p></div>',
            'image' => "https://old.professorfrancken.nl/wordpress/media/images/weblog/wessel.png",
        ],
        ':blog-toby:' => [
            'name' => 'Tobias Van Damme',
            'content' => '<div class="blogbio" style="min-height:150px;"><img class="blogpic" style="height:150px;" src="https://old.professorfrancken.nl/wordpress/media/images/weblog/tobias.jpg" alt=""><h4>Who is Tobias?</h4><p>Tobias was the commissioner of external relations of our beloved association in the year 2011-2012. Besides that you might know him from his ‘kakverhalen’ or as commentator of the Tour de Francken. Now he is a PhD-student in the research group SMS - Cyber-Physical Systems of prof dr. Claudio De Persis.</p></div>',
            'image' => "https://old.professorfrancken.nl/wordpress/media/images/weblog/tobias.jpg",
        ],
        ':blog-duncan:' => [
            'name' => 'Duncan Andrew Saunders',
            'content' => '<div class="blogbio" style="min-height:150px;"><img class="blogpic" style="height:150px;" src="https://old.professorfrancken.nl/wordpress/media/images/weblog/duncan.jpg" alt=""><h4>Who is Duncan?</h4><p>Duncan is a firstyear mathematics student. He is one of the internationals who you can regularly see in the Francken room. He originates from England and is the current chairmen of the freshmencommittee.</p></div>',
            'image' => "https://old.professorfrancken.nl/wordpress/media/images/weblog/duncan.jpg",
        ],
        ':blog-mees:' => [
            'name' => 'Mees Hoogland',
            'content' => '<div class="blogbio" style="min-height:150px;"><img class="blogpic" style="height:150px;" src="https://old.professorfrancken.nl/wordpress/media/images/weblog/mees.jpg" alt=""><h4>Who is Mees?</h4><p>Mees is a firstyear mathematics student. This year the is de Buixie \'sjaars\' and a member of the freshmen committee.</p></div>',
            'image' => "https://old.professorfrancken.nl/wordpress/media/images/weblog/mees.jpg",
        ],
        ':blog-jasper:' => [
            'name' => 'Jasper Pluijmers',
            'content' => '<div class="blogbio" style="min-height:150px;"><img class="blogpic" style="height:150px;" src="https://old.professorfrancken.nl/wordpress/media/images/weblog/jasper.jpg" alt=""><h4>Who is Jasper?</h4><p>Jasper is a master student Physics and Astronomy. You may know him from the fact that he sings \'Het FranckenVrijlied\' quite often during activities. Besides this you can also know him as the editor in chief of the Francken Vrij and as a member of the symposiumcommittee. </p></div>',
            'image' => "https://old.professorfrancken.nl/wordpress/media/images/weblog/jasper.jpg",
        ],
        ':blog-steven:' => [
            'name' => 'Steven Groen',
            'content' => '<div class="blogbio" style="min-height:150px;"><img class="blogpic" style="height:150px;" src="https://old.professorfrancken.nl/wordpress/media/images/weblog/steven.jpg" alt=""><h4>Who is Steven?</h4><p>Steven is a Mathematics student. He was treasurer of T.F.V. \'Professor Francken\' in 2014-2015. At the moment he is in the editorial board of the Francken Vrij. When he is not busy with one of these committees he likes to play music. If you don\'t know the song of our sixth lustrum yet, you should ask him sometime.  </p></div>',
            'image' => "https://old.professorfrancken.nl/wordpress/media/images/weblog/steven.jpg",
        ],
        ':bloggen-tom:' => [
            'name' => 'Tom Bosma',
            'content' => '<div class="blogbio" style="min-height:150px;"><img class="blogpic" style="height:150px;" src="https://old.professorfrancken.nl/wordpress/media/images/weblog/tom.png" alt=""><h4>Who is Tom?</h4><p>Tom is a master student Applied Physics and is currently doing his masters research. Last year he did his internship at ASTRON and, not to forget, he was the president of T.F.V. ‘Professor Francken’ in 2012-2013.</p></div>',
            'image' => "https://old.professorfrancken.nl/wordpress/media/images/weblog/tom.png",
        ],
        ':blog-bosch2:' => [
            'name' => 'Jasper Bosch',
            'content' => '<div class="blogbio" style="min-height:163px;"><img class="blogpic" src="https://old.professorfrancken.nl/wordpress/media/images/weblog/bosch.png" alt=""><h4>Who is Jasper?</h4><p>Jasper was the president of T.F.V. ‘Professor Francken’ in 2010-2011. After graduating in Applied Physics he has started working at Lambert Instruments.</p></div>',
            'image' => "https://old.professorfrancken.nl/wordpress/media/images/weblog/bosch.png",
        ],
        ':blog-bram2:' => [
            'name' => 'Bram Lap',
            'content' => '<div class="blogbio" style="min-height:180px;"><img class="blogpic" src="https://old.professorfrancken.nl/wordpress/media/images/weblog/Bram.png" alt=""><h4>Who is Bram?</h4><p>Bram is a student Astronomy and has been in multiple committees at Francken. He has also been advisory member of the faculty board. He is currently working on his project “Flipping the Course”.</p></div>',
            'image' => "https://old.professorfrancken.nl/wordpress/media/images/weblog/Bram.png",
        ],
        ':blog-Esmeralda:' => [
            'name' => 'Esmeralda Willemsen',
            'content' => '<div class="blogbio" style="min-height:150px;"><img class="blogpic" style="height:150px;" src="https://old.professorfrancken.nl/wordpress/media/images/weblog/esmeralda.jpg" alt=""><h4>Who is Esmeralda?</h4><p>Esmeralda is a first year student in Mathematics. She a member of the Freshmen committee and editorial board of the Francken Vrij.  </p></div>',
            'image' => "https://old.professorfrancken.nl/wordpress/media/images/weblog/esmeralda.jpg",
        ],
        ':blog-sjieuwe:' => [
            'name' => 'Sjoerd Sjieuwe Ferdinand Meesters',
            'content' => '<div class="blogbio" style="min-height:150px;"><img class="blogpic" style="height:150px;" src="https://old.professorfrancken.nl/wordpress/media/images/weblog/Sjieuwe-min.jpeg" alt=""><h4>Who is Sjieuwe?</h4><p>Sjoerd Meesters, better known as Sjieuwe, has been active at T.F.V. \'Professor Francken\' for already 8 years. He studies Physics and was treasurer of board \'Binnenstebuiten\'. He has been active in many committees and even organised the foreign trip to India! </p></div>',
            'image' => "https://old.professorfrancken.nl/wordpress/media/images/weblog/Sjieuwe-min.jpeg",
        ],
        ':blog-eelco:' => [
            'name' => 'Eelco Tekelenburg',
            'content' => '<div class="blogbio" style="min-height:150px;"><img class="blogpic" style="height:150px;" src="https://old.professorfrancken.nl/wordpress/media/images/weblog/eelco.jpeg" alt=""><h4>Who is Eelco?</h4><p>Eelco Tekelenburg, is a Applied Physics student at the University of Groningen and member at T.F.V. \'Professor Francken\' for already 5 years. This year he is part of the board of the Beta Business Days 2017 where he fulfills the important function of treasurer.</p></div>',
            'image' => "https://old.professorfrancken.nl/wordpress/media/images/weblog/eelco.jpeg",
        ],
        ':blog-delan:' => [
            'name' => 'Delân Çaglar',
            'content' => '<div class="blogbio" style="min-height:150px;"><img class="blogpic" style="height:150px;" src="https://old.professorfrancken.nl/wordpress/media/images/weblog/delan.jpg" alt=""><h4>Who is Delân?</h4><p>Delân Çağlar, is a first year Math student at the University of Groningen and already active in two committees of T.F.V. \'Professor Francken\'. He has been a Biology student for already 4 years and this year he made the brilliant decision to study Mathematics. Finishing studies and finding jobs was deferred for some extra years of being a student.</p></div>',
            'image' => "https://old.professorfrancken.nl/wordpress/media/images/weblog/delan.jpg",
        ],
        ':blog-willeke:' => [
            'name' => 'Willeke Mulder',
            'content' => '<div class="blogbio" style="min-height:150px;"><img class="blogpic" style="height:150px;" src="https://old.professorfrancken.nl/wordpress/media/images/weblog/willeke.jpg" alt=""><h4>Who is Willeke?</h4><p>Willeke Mulder, is a second year MSc student Astronomy at the University of Groningen current secretary and commissioner of education of T.F.V. \'Professor Francken\'. She has been active in committees like the Sjaarcie, Traktaartcie, Fraccie and Wiecksie.</p></div>',
            'image' => "https://old.professorfrancken.nl/wordpress/media/images/weblog/willeke.jpg",
        ],
        ':blog-brouwcie:' => [
            'name' => 'Brouwcie',
            'content' => '<div class="blogbio" style="min-height:200px;"><img class="blogpic" src="https://old.professorfrancken.nl/wordpress/wp-content/uploads/2015/01/Brouwcie.png" width=\'300\' alt=""><h4>Who are in the Brouwcie?</h4><p>Hilbert van Loo, Camiel van Hooff, Marten Koopmans, Wopke Hellinga, Rick Meijerink, Bauke steensma, Bas de Jong en Gerjan Wielink. More info: <a href=\'http://www.gebouw13.com\'>gebouw13.com</a></p></div>',
            'image' => "https://old.professorfrancken.nl/wordpress/wp-content/uploads/2015/01/Brouwcie.png",
        ],
    ]
];
