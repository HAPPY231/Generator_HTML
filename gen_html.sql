-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 28 Kwi 2022, 21:08
-- Wersja serwera: 10.4.19-MariaDB
-- Wersja PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `gen_html`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `podstawowe`
--

CREATE TABLE `podstawowe` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(30) NOT NULL,
  `tresc` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `podstawowe`
--

INSERT INTO `podstawowe` (`id`, `nazwa`, `tresc`) VALUES
(1, '<p></p>', '<p>\\n\\n</p>'),
(2, '<h1></h1>', '<h1>\\n\\n</h1>'),
(3, '<h2></h2>', '<h2>\\n\\n</h2>'),
(4, '<h3></h3>', '<h3>\\n\\n</h3>'),
(5, '<h4></h4>', '<h4>\\n\\n</h4>'),
(6, '<article></article>', '<article>\\n\\n</article>'),
(7, '<aside></aside>', '<aside>\\n\\n</aside>'),
(8, '<details></details>', '<details>\\n\\n</details>'),
(9, '<footer></footer>', '<footer>\\n\\n</footer>'),
(10, '<header></header>', '<header>\\n\\n</header>'),
(11, '<main></main>', '<main>\\n\\n</main>'),
(12, '<nav></nav>', '<nav>\\n\\n</nav>'),
(13, '<section></section>', '<section>\\n\\n</section>'),
(14, '<script></script>', '<script>\\n\\n</script>');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `podstawowe`
--
ALTER TABLE `podstawowe`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `podstawowe`
--
ALTER TABLE `podstawowe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
