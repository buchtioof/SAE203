-- Création de la table articles, cette table contient les articles de la page d'accueil
CREATE TABLE articles (
    id INT PRIMARY KEY,
    requiretest BOOLEAN,
    requirevideo BOOLEAN,
    fontcolor VARCHAR(32),
    color VARCHAR(32),
    url VARCHAR(255),
    icon VARCHAR(255),
    number VARCHAR(8),
    mintitle VARCHAR(255),
    title VARCHAR(255),
    subtitle VARCHAR(255),
    article TEXT,
    urlvideo VARCHAR(255),
    creditvideo VARCHAR(255),
    title1 VARCHAR(255),
    article1 TEXT,
    title2 VARCHAR(255),
    article2 TEXT,
    title3 VARCHAR(255),
    article3 TEXT,
    title4 VARCHAR(255),
    article4 TEXT,
    title5 VARCHAR(255),
    article5 TEXT
);

--Ajout des articles à la table
-- Article 0
INSERT INTO articles (
    id, requiretest, requirevideo, fontcolor, color, url, icon, number, mintitle, title, subtitle, article, urlvideo, creditvideo
) VALUES (
    0, NULL, NULL, '--black', '--purple', '?page=0', 'assets/icons/one.svg', '01.', 'Définition',
    'C’est quoi une puissance de 10 ?',
    'À la base, il faut déjà comprendre ce qu’est une puissance de 10 afin de parfaitement l’utiliser.',
    'Une puissance de 10, c’est une façon rapide d’écrire combien de fois on multiplie 10 par lui-même. Par exemple, 10ˆ3, ça veut dire 10×10×10.',
    NULL, NULL
);

-- Article 1
INSERT INTO articles (
    id, requiretest, requirevideo, fontcolor, color, url, icon, number, mintitle, title, subtitle, article, urlvideo, creditvideo
) VALUES (
    1, NULL, NULL, '--black', '--green', '?page=1', 'assets/icons/two.svg', '02.', 'Positif',
    'Essayons notre puissance de 10',
    'Après avoir les bases, il faut s’essayer aux puissances de 10 avec des nombres positifs.',
    'Si le petit chiffre en haut (appelé exposant) est positif, comme 10^2, cela veut dire qu’on multiplie 10 par lui-même plusieurs fois. Par exemple, 10^2 = 10×10 = 100.',
    NULL, NULL
);

-- Article 2
INSERT INTO articles (
    id, requiretest, requirevideo, fontcolor, color, url, icon, number, mintitle, title, subtitle, article, urlvideo, creditvideo
) VALUES (
    2, NULL, NULL, '--black', '--yello', '?page=2', 'assets/icons/three.svg', '03.', 'Négatif',
    'Mais que faire du négatif ?',
    'Même dans le négatif, il y a toujours du positif ! C’est ce que nous allons voir ici.',
    'Si l’exposant est négatif, comme 10^(−2), cela signifie qu’on divise 1 par 10 fois à cette puissance. Autrement dit, on déplace la virgule vers la gauche. Par exemple, 10^(−2) correspond à 1/(10×10) = 0,01.',
    NULL, NULL
);

-- Article 3
INSERT INTO articles (
    id, requiretest, requirevideo, fontcolor, color, url, icon, number, mintitle, title, subtitle, article, urlvideo, creditvideo
) VALUES (
    3, NULL, NULL, '--black', '--red', '?page=3', 'assets/icons/four.svg', '04.', 'Nulle',
    'Et quand il y a rien ?',
    'Eh bien oui, parfois on touche le zéro, mais souvent il suffit d’un rien pour faire quelque chose...',
    'Quand on met un exposant 0, ça veut toujours faire 1. Par exemple, 10^0 = 1. C’est une règle spéciale des puissances !',
    NULL, NULL
);

-- Article 4
INSERT INTO articles (
    id, requiretest, requirevideo, fontcolor, color, url, icon, number, mintitle, title, subtitle, article, urlvideo, creditvideo
) VALUES (
    4, NULL, NULL, '--black', '--bloue', '?page=4', 'assets/icons/five.svg', '05.', 'Pratique',
    'Sacrément pratique !',
    'Bien sûr, les puissances sont très pratiques dans beaucoup de cas !',
    'Les puissances de 10 sont super utiles pour écrire des très grands nombres (comme un million 10^6) ou des très petits nombres (comme 0,001 qui s’écrit 10^(−4)) sans écrire plein de zéros.',
    NULL, NULL
);

-- Article 5
INSERT INTO articles (
    id, requiretest, requirevideo, fontcolor, color, url, icon, number, mintitle, title, subtitle, article, urlvideo, creditvideo
) VALUES (
    5, NULL, NULL, '--black', '--pink', '?page=5', 'assets/icons/six.svg', '06.', 'Utilisations',
    'Partout autour de nous',
    'Elles sont tellement pratiques qu’on en retrouve partout sans même y penser !',
    'Les puissances de 10 sont partout : en maths, dans les sciences, et même dans la vie de tous les jours. Par exemple, on parle de kilo (1000 ou 10^3), méga (1 000 000 ou 10^6), ou encore milli (0,001 ou 10^(-3)).',
    NULL, NULL
);

-- Article 6 (Mentions légales), spécificité de la page, elle utilise plusieurs articles, il aurait été plus simple d'automatiser mais je suis trop en retard pour me pencher dessus
INSERT INTO articles (
    id, requiretest, requirevideo, fontcolor, color, url, icon, number, mintitle, title, subtitle, article, urlvideo, creditvideo,
    title1, article1, title2, article2, title3, article3, title4, article4, title5, article5
) VALUES (
    6, NULL, NULL, '--white', '--greydark', '?page=6', 'assets/icon3.svg', '07.', 'Mentions légales',
    'Mentions légales',
    'Ce site web a été développé dans le cadre d‘un projet étudiant. Il peut contenir du contenu appartenant à autrui.',
    NULL, NULL,
    'Créateur et responsable légal', 'Ramzi IDIR, étudiant en BUT Métiers du Multimédia et de l''Internet à l’Université Sorbonne Paris Nord.',
    'Hébergement', 'Direction des Systèmes d’Information de l’Université Sorbonne Paris Nord.',
    'Propriété intellectuelle', 'Ce site contient des extraits vidéos produites par Yvan Monka (Maths et Tiques). Ces extraits sont préparés par moi-même.',
    'Procédure de notification', 'L’utilisateur qui constaterait des inexactitudes dans les informations publiées, ou s’opposerait à la publication de tout ou partie du contenu de ce site, peut en informer à tout moment le responsable de la publication (mentionné ci-dessus) afin que celui-ci y mette fin.',
    'Droit applicable', 'En cas de litige, le droit français est applicable. Il est fait attribution exclusive de juridiction aux tribunaux compétents.'
);