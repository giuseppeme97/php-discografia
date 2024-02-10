CREATE TABLE album (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titolo VARCHAR(255) NOT NULL,
    autore VARCHAR(255) NOT NULL,
    anno INT NOT NULL,
    genere VARCHAR(255) NOT NULL
);

INSERT INTO album (titolo, autore, anno, genere)
VALUES
    ('The Dark Side of the Moon', 'Pink Floyd', 1973, 'Progressive Rock'),
    ('Abbey Road', 'The Beatles', 1969, 'Rock'),
    ('Led Zeppelin IV', 'Led Zeppelin', 1971, 'Hard Rock'),
    ('Hotel California', 'Eagles', 1976, 'Rock'),
    ('Back in Black', 'AC/DC', 1980, 'Hard Rock'),
    ('Rumours', 'Fleetwood Mac', 1977, 'Rock'),
    ('The Wall', 'Pink Floyd', 1979, 'Progressive Rock'),
    ('A Night at the Opera', 'Queen', 1975, 'Rock'),
    ('Born to Run', 'Bruce Springsteen', 1975, 'Rock'),
    ('OK Computer', 'Radiohead', 1997, 'Alternative Rock'),
    ('The Joshua Tree', 'U2', 1987, 'Rock'),
    ('Exile on Main St.', 'The Rolling Stones', 1972, 'Rock'),
    ('The Doors', 'The Doors', 1967, 'Psychedelic Rock'),
    ('Sticky Fingers', 'The Rolling Stones', 1971, 'Rock'),
    ('Wish You Were Here', 'Pink Floyd', 1975, 'Progressive Rock'),
    ('Highway to Hell', 'AC/DC', 1979, 'Hard Rock'),
    ('Raising Hell', 'Run-D.M.C.', 1986, 'Hip Hop'),
    ('The Queen Is Dead', 'The Smiths', 1986, 'Alternative Rock'),
    ('Black Sabbath', 'Black Sabbath', 1970, 'Heavy Metal'),
    ('Ride the Lightning', 'Metallica', 1984, 'Thrash Metal'),
    ('Electric Ladyland', 'Jimi Hendrix', 1968, 'Psychedelic Rock'),
    ('The Rise and Fall of Ziggy Stardust', 'David Bowie', 1972, 'Glam Rock'),
    ('Thriller', 'Michael Jackson', 1982, 'Pop'),
    ('Nevermind', 'Nirvana', 1991, 'Grunge'),
    ('Hunky Dory', 'David Bowie', 1971, 'Rock'),
    ('The Clash', 'The Clash', 1977, 'Punk Rock'),
    ('Rust in Peace', 'Megadeth', 1990, 'Thrash Metal'),
    ('Automatic for the People', 'R.E.M.', 1992, 'Alternative Rock'),
    ('The Chronic', 'Dr. Dre', 1992, 'Hip Hop'),
    ('L.A. Woman', 'The Doors', 1971, 'Blues Rock'),
    ('The Suburbs', 'Arcade Fire', 2010, 'Indie Rock'),
    ('Ten', 'Pearl Jam', 1991, 'Grunge'),
    ('Blood Sugar Sex Magik', 'Red Hot Chili Peppers', 1991, 'Funk Rock');