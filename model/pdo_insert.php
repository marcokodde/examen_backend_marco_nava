<?php
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "pruebas";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // begin the transaction
    $conn->beginTransaction();
    // our SQL statements
    $conn->exec("INSERT INTO users (name, email, password, address, phone, birthday)
    VALUES  ('Dr. Selena Nolan Ii','bradtke.kory@example.com','Voluptas Harum Pariatur Est Est Soluta Tempora Recusandae.','NJiMadqZz0','7955463209','2006-10-26 00:00:00'),
	 ('Keaton Wolf','konopelski.glennie@example.com','Aut Nisi Possimus Quo Aut Sunt Minima Placeat Dolores.','ROUg1MN99M','5079115823','1980-11-10 00:00:00'),
	 ('Elwyn Ward','asporer@example.net','Ad In Vitae Ut Eos Saepe Nihil Consequatur.','DzbHZIABkO','7005952653','1970-10-25 00:00:00'),
	 ('Dayton Lynch Jr.','yjast@example.org','Excepturi Aliquam Veritatis Hic Hic Consequuntur Est.','SNMiQAWLbA','0508120014','1986-07-11 00:00:00'),
	 ('Lindsey Parker','rterry@example.net','Quas Labore Ipsam Omnis Nisi Ut.','bzyDIBM4uP','4994099232','2014-03-16 00:00:00'),
	 ('Rachelle O''kon','darren.sauer@example.com','Adipisci Excepturi Eaque Cumque Delectus Sit Sint Quos Magni.','pvRSafcBvb','2190021210','2021-09-11 00:00:00'),
	 ('Kurtis Nitzsche','kendall.schneider@example.net','Earum Soluta Ab Nobis A Aliquid Quia.','VPbMJ3SSRi','9245060706','1972-12-05 00:00:00'),
	 ('Arvel Herman','emanuel11@example.org','Ex Praesentium Aperiam Qui.','m8JsKUOidm','0029195297','2010-08-17 00:00:00'),
	 ('Osborne Volkman','fstokes@example.org','Molestias Eos Consectetur Repudiandae Est Rerum.','wiLFmuiREO','0253049962','1990-01-09 00:00:00'),
	 ('Daisy Gusikowski','joseph11@example.net','Nulla Voluptas Quas Temporibus Ducimus Voluptatem Eum A.','rOYCSWCcc6','8056587328','2003-09-15 00:00:00');
	 ('Dr. London Sipes Iii','pkuhn@example.org','Itaque Occaecati Enim Non Qui Ad Consectetur.','WqZZhks8DQ','8889951298','2015-08-27 00:00:00'),
	 ('Miss Lexi Wunsch','jamarcus95@example.org','Quod Perferendis Voluptate Esse Animi Aut.','dNmJ8EaJyh','2669034512','1983-12-21 00:00:00'),
	 ('Ethel Hoppe Ii','vida26@example.com','Dolorum Eligendi Unde Accusantium Est Ut Voluptatum Ullam.','9nVVZ2iEHq','8190167247','1980-02-24 00:00:00'),
	 ('Carson Fadel','aidan.senger@example.org','Nihil Quia Accusantium Eveniet Non Enim Dolore.','hBizNqDa1i','6180717926','1971-03-15 00:00:00'),
	 ('Mrs. Emie Mertz Phd','emilie03@example.net','Qui Et Quasi Recusandae Repellendus.','DzYkwKgUyh','6823075549','1988-05-18 00:00:00'),
	 ('Prof. Johann Ondricka','turner.brooks@example.net','Commodi Facere Fugit Natus Illum.','TI48AjjDVk','3337137679','1978-04-29 00:00:00'),
	 ('Dr. Sincere Mcglynn','julien60@example.org','Et Laudantium Quidem Et Ut.','FOM8fHGkAY','2373226576','2011-10-04 00:00:00'),
	 ('Eino Abernathy','pat.tromp@example.net','Est Reprehenderit Facere Mollitia Unde At Rerum Est.','v8vein9ZUr','9147269382','2016-07-30 00:00:00'),
	 ('Clemmie Hamill Md','moen.uriah@example.net','Soluta Sit Corrupti Veniam Quis Itaque.','qddA8O42ZR','5538348501','1983-08-09 00:00:00'),
	 ('Ms. Lea Hyatt Phd','toconner@example.net','Tenetur Aperiam Aut Officiis Voluptatem Non Nulla Natus Nam.','TJ0l7ex8Ii','7746967024','2023-05-15 00:00:00');
	 ('Dr. Kaci Carter I','alyson.welch@example.org','Rerum Incidunt Qui Dignissimos Quisquam Accusantium Et.','AS3uP94fGm','9243002461','1981-04-24 00:00:00'),
	 ('Ms. Lavina Keebler','pink23@example.com','Voluptas Sequi Rerum Ad Est Dolorem Facere Qui.','ZNVqiqIYzF','3538964003','2009-11-24 00:00:00'),
	 ('Meta Shanahan','acrooks@example.net','Distinctio Sint In Nisi Mollitia Illum Facilis.','Z3O5RzLdXq','9152755452','1985-09-15 00:00:00'),
	 ('Mr. Eriberto Schinner','bode.alice@example.org','Suscipit Quidem Quia Accusamus Cumque Quasi Autem Similique.','AxDkVTS9UY','9334592479','2013-06-13 00:00:00'),
	 ('Bertrand Deckow','zaria09@example.com','Voluptates Ut Consequuntur Omnis Vero Id Deserunt Asperiores.','HaQBLqHArK','9936274801','2014-11-18 00:00:00'),
	 ('Prof. Buford Kihn','anastacio63@example.org','Doloremque Incidunt Atque Cumque Voluptates Laboriosam Eveniet.','pBZwcGYFcs','3361556869','1996-09-01 00:00:00'),
	 ('Darron Gibson Iii','domenick25@example.net','Est Debitis Beatae Distinctio Reprehenderit Accusamus.','Y4D33FwbR2','1024609686','2000-11-08 00:00:00'),
	 ('Cheyenne Steuber','zoie32@example.net','Beatae Ut Repellendus Similique.','g4lZZNHDvi','3546743140','1972-02-16 00:00:00'),
	 ('Marcelino Simonis','wgusikowski@example.com','Architecto Voluptatem Qui Doloribus Natus Rem Eos Perferendis Fugit.','463VgItMXB','6636809946','1989-08-29 00:00:00'),
	 ('Frankie Schulist','pollich.keith@example.net','Id Rerum Sed Voluptatum Nihil Voluptas.','9t2eTM6oL7','7810050678','2017-11-29 00:00:00');
	 ('Madie Roob','cydney.west@example.org','Ut Non Aut Debitis Neque Dolore.','tqOm3HwShh','4580280000','1978-11-11 00:00:00'),
	 ('Noel Schiller','angus52@example.org','Est Fuga Nulla Perspiciatis Rerum Nihil.','kxWSwVZcTI','2551385646','1987-05-25 00:00:00'),
	 ('Darien Gutmann','mitchell.darrion@example.org','Ut Adipisci Excepturi Id Ipsam Modi Itaque Hic.','9tfdS4UCA9','2246445966','2020-03-23 00:00:00'),
	 ('Shaina Sanford','kayley06@example.net','Dignissimos Natus Dolor Maiores Voluptatibus.','91edJwBaMV','4703680845','1974-02-14 00:00:00'),
	 ('Dejah Little','ned24@example.com','Inventore Dicta Illo Nemo Quisquam Odit Expedita.','DVWpn6oBjl','7457076484','2000-03-05 00:00:00'),
	 ('Mr. Davon Lemke Md','nienow.elmira@example.com','Tenetur At Fugit Molestias.','ELy9lCuouQ','7025470915','2001-09-28 00:00:00'),
	 ('Miss Jaclyn Harber Ii','devin.harris@example.com','Omnis Odit Molestiae Explicabo Aut Vel Aut Necessitatibus.','8lElUnIZAc','0604278818','1973-08-14 00:00:00'),
	 ('Dr. Ophelia Lueilwitz','kiley85@example.org','Est Aut In Ut.','lzs6CiROmZ','2666471382','1998-10-05 00:00:00'),
	 ('Marcel Tillman','vbarrows@example.com','Cumque Sequi Dolorem Commodi Deleniti Et Enim Corporis.','3HlHJmKp9m','4418630644','1982-08-07 00:00:00'),
	 ('Adrianna Wilderman','wdibbert@example.net','Qui Et Et Quam Distinctio Quaerat.','BUk2ClFnGz','1211688250','1997-12-18 00:00:00');
	 ('Will Emmerich','laverne.robel@example.org','Est Suscipit Quia Dolorem Dolorem Iure Dolorem Magni.','5Xt9oo9vwr','2804343873','2021-03-01 00:00:00'),
	 ('Enos Crona','cordell.robel@example.org','Perferendis Tempore Quasi Eos Reprehenderit Consequuntur Assumenda.','EpEZ7d4Sls','4071436959','1978-03-18 00:00:00'),
	 ('Demond Schuppe','altenwerth.jacklyn@example.org','Possimus Natus Temporibus Repellat Voluptate Possimus Natus Dolor.','7CGT7pii9U','6536571629','2018-06-27 00:00:00'),
	 ('Afton Ratke','layla.kovacek@example.org','Modi Maxime Corrupti Ab Optio Ex.','SK5VT2BOry','1133503188','1991-07-11 00:00:00'),
	 ('Jaden Boehm','izulauf@example.com','Error Quisquam Consequatur Odio Quo Voluptatum Sed Quae.','q1HxKIzkSG','4030396403','2006-04-08 00:00:00'),
	 ('Giovani Hyatt','dibbert.jerod@example.net','Necessitatibus Facere Illo Ipsam Repudiandae Iste Quasi Aut Quod.','niW43CFFDZ','2407184094','1986-08-10 00:00:00'),
	 ('Alejandra Cummerata','orie31@example.org','Illo Soluta Sunt Laudantium Animi Distinctio.','igGWEU2MPI','4183358881','2007-06-05 00:00:00'),
	 ('Prof. Llewellyn Kautzer Ii','weimann.theresa@example.org','Et Expedita Animi Porro Dolorum Voluptates Sed.','Si7josTWtO','6734559141','2010-06-09 00:00:00'),
	 ('Marguerite Hansen','lukas21@example.net','Quia Nisi Quis Quas Omnis.','5PAiCIVdRz','1847552478','1974-05-15 00:00:00'),
	 ('Rhea Durgan I','hessel.isom@example.com','Vero Maxime Optio Omnis Voluptas Expedita Velit Possimus Magni.','yBA9Uh10GM','3943694312','2008-02-27 00:00:00');
	 ('Antwan Cormier','yreinger@example.org','Doloremque Veniam Et Facilis Ipsam Itaque Exercitationem.','ErPlygj4KI','9826060460','2020-03-20 00:00:00'),
	 ('Mrs. Lori Heathcote Iii','considine.margarita@example.com','Minima Similique Ducimus Quos Quod Fugiat Neque.','LHw9Pml6Zj','8180925617','1993-07-27 00:00:00'),
	 ('Abby Christiansen','elna.ohara@example.org','Id Qui Quis Impedit Et Ut.','eYikykThvu','6238983271','1978-04-11 00:00:00'),
	 ('Shea Zieme','francesco07@example.net','Est Expedita Cupiditate Quam Suscipit Dolor.','x90szMxRQY','9570732398','2005-02-06 00:00:00'),
	 ('Michel Emard Jr.','obergstrom@example.com','Nisi Ducimus Voluptate Omnis Laudantium Ducimus Doloremque Omnis.','oFDpKqfBV4','0354080080','1989-01-21 00:00:00'),
	 ('Nickolas Mraz','casper.mollie@example.com','Et Aperiam Non Esse Amet.','1lvFBIksuf','9073747276','2011-12-01 00:00:00'),
	 ('Murray Doyle','frami.sonya@example.org','Id Quidem Nulla Dignissimos Quidem Distinctio Illum Eos.','1DYHICfRJW','2689792570','1972-07-20 00:00:00'),
	 ('Prof. Jana Schuppe','brendon.hammes@example.net','Qui Voluptatem Magni Nam Non Ad Ipsa Eum Sunt.','AUbpCMsUIX','3698713433','1975-10-27 00:00:00'),
	 ('Josie Wehner','nitzsche.edmond@example.com','Earum Porro Maiores Veritatis Tempora.','3jXBQP1Jo2','8037105550','2005-05-03 00:00:00'),
	 ('Mr. Moriah Robel','erwin.donnelly@example.net','Amet Qui Modi Aliquam Quia Et Qui.','kE1GxLSmh8','1026857952','1996-06-10 00:00:00');
	 ('Clair Pagac','bradford36@example.org','In Fugiat Qui Sapiente Eos Magnam Quo Odit Dolorum.','T18Kvro507','2378396885','2016-03-19 00:00:00'),
	 ('Clement Wyman','denesik.jasmin@example.org','Et Molestiae Reiciendis Maxime Quia Laudantium Dolorem Quis Explicabo.','Eviu1Wafz2','0392213932','1986-11-02 00:00:00'),
	 ('Mrs. Paige Kuvalis','dveum@example.com','Autem Molestiae Modi Eaque.','3bBPw7hhoQ','1479263906','1981-08-26 00:00:00'),
	 ('Asha Graham','general72@example.com','Autem Delectus Tempore Sed Numquam.','thHmeQanuw','1117695056','1993-10-31 00:00:00'),
	 ('Mr. Miles Rath','reynolds.camron@example.org','Voluptates Similique Voluptatibus Velit Id Autem Quia.','j3q4Z7iTx0','9345223025','1992-12-14 00:00:00'),
	 ('Mr. Unique Cormier','schowalter.georgiana@example.net','Distinctio Non Fugiat Facilis Sapiente Libero Quam.','mPELSuBryA','1209182932','1993-01-04 00:00:00'),
	 ('Taylor Dicki','gjacobi@example.net','Nobis Nihil Repellendus Distinctio Quaerat Quos.','qfBZvdvJKg','2363419556','1994-09-27 00:00:00'),
	 ('Aisha Towne','hailee.johnston@example.net','Quis Neque Voluptas Amet Enim.','afHF06oEoJ','9273388369','1991-05-05 00:00:00'),
	 ('Natasha Lemke','abbey43@example.net','Quis Itaque Numquam Dolores Eveniet Maxime.','P2xV2VxWdW','8797852913','2020-10-20 00:00:00'),
	 ('Mr. Marques Hammes','daryl.nader@example.net','Commodi Quae Sed Cum Ea Harum.','LFOtSNyR4Q','0498724839','2005-09-26 00:00:00');
	 ('Dr. Alek Stiedemann Iv','charity.beahan@example.com','Deserunt Fuga Cum Rem Qui Quia Inventore Officiis.','rFH6MNv69f','7100662137','2009-10-12 00:00:00'),
	 ('Ulises Keeling','hope.mcglynn@example.com','Iure Et Eum Placeat Eius Reiciendis.','Vnxd9bH71N','8025811475','1992-09-16 00:00:00'),
	 ('Ethan Gislason','roy.bosco@example.net','Qui Debitis Ducimus Rerum Et Ut Aut Sit.','RRkvvEaDsO','7396131288','1994-10-01 00:00:00'),
	 ('Miss Tomasa Greenfelder','harvey.cleora@example.com','Tempora Iste Maiores Sint Minima Nobis.','0Hvyo6tRBk','7326207061','1984-05-17 00:00:00'),
	 ('Ian Homenick','cassandre26@example.org','Pariatur Occaecati At Aut Aperiam Odio.','7Zlc1he4u1','6217266562','2000-11-24 00:00:00'),
	 ('Aliyah Labadie','gregorio.kuhn@example.net','Ipsam Illo Hic Maxime Consequatur Minus Facere.','5RKPf4Gn6c','5966848288','2023-01-08 00:00:00'),
	 ('Aracely Jerde','kavon54@example.net','Quia Eius Enim Est Maxime Dolores Sequi Aliquam.','ogUwtN25iX','4219958512','1990-10-07 00:00:00'),
	 ('Merle Huels','roberts.michale@example.net','Dolorem Enim Molestias Qui Corporis Repellat Architecto Cupiditate.','V9SeoMleA7','1046338446','2009-10-23 00:00:00'),
	 ('Alexys Kreiger','nolan.thiel@example.org','Qui Aperiam Fugiat Maiores Officia.','UNbHvu5oMl','5456285210','2009-10-16 00:00:00'),
	 ('Prof. Brannon Brekke Dds','vlockman@example.org','Deserunt Voluptatem Omnis Asperiores Voluptatem.','VE0v1bn4c9','4463669044','2001-10-23 00:00:00');
	 ('Mr. Bertrand Kilback Phd','antonetta.kozey@example.net','Ipsa Aliquam Voluptas Est Ut Cupiditate Aut Est.','88Iyj4zx7T','6370083624','2020-07-31 00:00:00'),
	 ('Ruthe Homenick','vhackett@example.org','Doloremque Minus Velit Dolore Qui Aperiam Nesciunt Harum.','fu3sl5eP29','3335008643','1988-09-11 00:00:00'),
	 ('Dina Kertzmann','alvera31@example.net','Rerum Deleniti Autem Quisquam Incidunt Eligendi Quae Et Aut.','BGaF0sY0ro','5755314870','2009-09-02 00:00:00'),
	 ('Prof. Wilber Kessler Jr.','auer.brionna@example.net','Beatae Minus Ducimus Quia Itaque Explicabo Ducimus Nulla.','JKjwMW0xgQ','8782430287','1988-09-08 00:00:00'),
	 ('Vivienne Lubowitz','torrance.bins@example.org','Ipsa Temporibus Eos Officiis Voluptatem Molestiae.','APzwxR9ibw','1584326839','2008-05-28 00:00:00'),
	 ('Dolores Stehr','tremblay.evalyn@example.com','Consequatur Temporibus Delectus Sequi.','fpuk0oIOHP','1401287607','2015-03-22 00:00:00'),
	 ('Charlene Rodriguez','jewell54@example.com','Eius Molestias Alias Placeat Placeat Exercitationem Iste Labore.','Zi1AOdHlIu','8689723899','2014-03-08 00:00:00'),
	 ('Nola Howe Iii','nicolas.elizabeth@example.com','Odit Excepturi Est Nostrum.','Hr6uusTbtp','3845529249','1979-03-22 00:00:00'),
	 ('Katlyn Morar','ufisher@example.com','Voluptatem Ut Vel Voluptate Voluptas Sed Aspernatur.','ZkmhPqAiLU','9590353971','1989-10-10 00:00:00'),
	 ('Prof. Edward Ebert','isabelle.hodkiewicz@example.org','Deserunt Sint Sint Animi Excepturi Molestiae.','kanPApfZ1h','4839231329','2014-04-12 00:00:00');
	 ('Zoila Tremblay','paucek.sydni@example.net','Culpa Enim Architecto Dolorem Et Libero.','EPE6fPVN6g','5934891738','1977-01-17 00:00:00'),
	 ('Jacey Willms','jakubowski.nikko@example.com','Fugit Voluptas Sit Nam Sit.','CqlL5evuuo','5697151072','2011-07-22 00:00:00'),
	 ('Ambrose Dibbert','tjenkins@example.org','Numquam Commodi Voluptatem Sint Voluptas.','4uWVuN2BP7','1282118830','1977-11-19 00:00:00'),
	 ('Camilla Casper Ii','cortez.pouros@example.org','Officia Doloremque Eaque Quaerat Qui Perferendis Voluptatibus Doloremque.','9wTo900VxC','6822367863','2008-09-16 00:00:00'),
	 ('Bell Kiehn','cboehm@example.com','Repudiandae Consequatur Quisquam Ea Qui Omnis Accusantium Quia.','6jBDqhSb4G','4626469949','1991-10-13 00:00:00'),
	 ('Ms. Megane Purdy Dvm','ocorwin@example.com','Voluptas Nihil Est Adipisci Quo Voluptatem Eos.','7CQ3Hds5Zw','3318069224','1989-09-19 00:00:00'),
	 ('Jany Satterfield','vlegros@example.net','Velit Facere Incidunt Ut Perspiciatis Delectus.','gIAcwRJRi0','8918578596','2016-09-27 00:00:00'),
	 ('Mrs. Luella Koelpin','luz.borer@example.org','Qui Itaque Illum Voluptas Vel Cumque.','5cKYwKkJAk','0048444208','1989-11-21 00:00:00'),
	 ('Terrill Vonrueden','amcclure@example.com','Quae Aut Laboriosam Deserunt Tempore.','6bNLzFHKJs','0662546966','2017-03-20 00:00:00'),
	 ('Mr. Valentin Gottlieb','kautzer.cayla@example.net','Sequi Consectetur Maxime Et Velit Accusantium Minus.','IiTZ0sps97','8574085497','1995-06-19 00:00:00'); ");

    // commit the transaction
    $conn->commit();
    echo "New records created successfully";
} catch (PDOException $e) {
    // roll back the transaction if something failed
    $conn->rollback();
    echo "Error: " . $e->getMessage();
}

$conn = null;
