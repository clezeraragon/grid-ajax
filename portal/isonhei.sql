-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 10-Nov-2014 às 14:26
-- Versão do servidor: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `isonhei`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `acoes`
--

CREATE TABLE IF NOT EXISTS `acoes` (
`id` int(11) NOT NULL,
  `nm_acao` varchar(100) NOT NULL,
  `nu_pontos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `anuncio`
--

CREATE TABLE IF NOT EXISTS `anuncio` (
  `id` int(11) NOT NULL,
  `campanha_id` int(11) NOT NULL,
  `bloco_id` int(11) NOT NULL,
  `anuncio` varchar(255) NOT NULL,
  `path_img` varchar(255) NOT NULL,
  `dt_ini` datetime NOT NULL,
  `dt_fim` datetime NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `anuncio_metrica`
--

CREATE TABLE IF NOT EXISTS `anuncio_metrica` (
`id` int(11) NOT NULL,
  `anuncio_id` int(11) NOT NULL,
  `metrica_tipo_id` int(11) NOT NULL,
  `posicao` varchar(45) NOT NULL,
  `ip` varchar(45) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `ba_bloco`
--

CREATE TABLE IF NOT EXISTS `ba_bloco` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `pagina` varchar(100) NOT NULL,
  `st_rotativo` tinyint(1) NOT NULL,
  `st_randomico` tinyint(1) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `campanha`
--

CREATE TABLE IF NOT EXISTS `campanha` (
  `id` int(11) NOT NULL,
  `cliente_id` int(11) NOT NULL,
  `campanha` varchar(255) NOT NULL,
  `dt_ini` datetime NOT NULL,
  `dt_fim` datetime NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
`id` int(11) NOT NULL,
  `nm_razao_social` varchar(255) NOT NULL,
  `nm_cnpj` varchar(18) NOT NULL,
  `nm_site` varchar(100) DEFAULT NULL,
  `nm_responsavel` varchar(255) DEFAULT NULL,
  `nm_email_responsavel` varchar(255) DEFAULT NULL,
  `nm_telefone1` varchar(16) DEFAULT NULL,
  `nm_telefone2` varchar(16) DEFAULT NULL,
  `nm_cep` varchar(8) DEFAULT NULL,
  `nm_endereco` varchar(255) DEFAULT NULL,
  `nu_numero` varchar(10) DEFAULT NULL,
  `nm_complemento` varchar(255) DEFAULT NULL,
  `nm_bairro` varchar(100) DEFAULT NULL,
  `nm_cidade` varchar(100) DEFAULT NULL,
  `nm_uf` varchar(2) DEFAULT NULL,
  `txt_resumo` text,
  `txt_descricao` text,
  `nm_path_logo` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente_contrato`
--

CREATE TABLE IF NOT EXISTS `cliente_contrato` (
`id` int(11) NOT NULL,
  `cliente_id` int(11) NOT NULL,
  `dt_ini_veiculacao` datetime NOT NULL,
  `dt_fim_veiculacao` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente_foto`
--

CREATE TABLE IF NOT EXISTS `cliente_foto` (
`id` int(11) NOT NULL,
  `cliente_id` int(11) NOT NULL,
  `nm_path` varchar(255) NOT NULL,
  `nm_titulo` varchar(255) NOT NULL,
  `txt_descricao` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente_video`
--

CREATE TABLE IF NOT EXISTS `cliente_video` (
`id` int(11) NOT NULL,
  `cliente_id` int(11) NOT NULL,
  `nm_link` varchar(255) NOT NULL,
  `nm_titulo` varchar(255) NOT NULL,
  `txt_descricao` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `conteudo`
--

CREATE TABLE IF NOT EXISTS `conteudo` (
`id` int(11) NOT NULL,
  `categoria_id` int(11) NOT NULL,
  `status_id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `introducao` text NOT NULL,
  `conteudo` text NOT NULL,
  `path_img` varchar(255) DEFAULT NULL,
  `url` varchar(150) NOT NULL,
  `titulo_pag` varchar(100) NOT NULL,
  `descricao_pag` varchar(255) NOT NULL,
  `palavras_pag` varchar(255) NOT NULL,
  `st_comentario` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Extraindo dados da tabela `conteudo`
--

INSERT INTO `conteudo` (`id`, `categoria_id`, `status_id`, `titulo`, `introducao`, `conteudo`, `path_img`, `url`, `titulo_pag`, `descricao_pag`, `palavras_pag`, `st_comentario`, `created_at`, `updated_at`) VALUES
(8, 20, 1, 'Como Montar uma Mesa de Guloseimas', 'Os docinhos, por si só, já são destaques nas festas e uma forma de deixar qual quer um com água na boca é montar uma mesa caprichada de guloseimas, é sucesso garantido. Pode-se utilizar doces personalizados, juntamente com doces tradicionais como brigadeiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiii', '<div>\r\n<div>\r\n<div>\r\n<div id="desc-area">Os docinhos, por si s&oacute;, j&aacute; s&atilde;o destaques nas festas e uma forma de deixar qual quer um com &aacute;gua na boca &eacute; montar uma mesa caprichada de guloseimas, &eacute; sucesso garantido. Pode-se utilizar doces personalizados, juntamente com doces tradicionais como brigadei<br />\r\n&nbsp;\r\n<p>Acompanhe nesta dica ideias para montar uma bel&iacute;ssima apresenta&ccedil;&atilde;o para uma mesa de doces :</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>1 &ndash;</strong> o tamanho da mesa deve ser proporcional &agrave; quantidade de doces.&nbsp;</p>\r\n\r\n<p><strong>2 &ndash;</strong> comprar os doces conforme o n&uacute;mero de convidados e verificar a data de validade.&nbsp;</p>\r\n\r\n<p><strong>3 &ndash; </strong>n&atilde;o conte somente com o n&uacute;mero de crian&ccedil;as, tenha como base a quantidade total de convidados.&nbsp;</p>\r\n\r\n<p><strong>4 &ndash;</strong> colocar os doces em recipientes de acr&iacute;lico, vidro, pl&aacute;stico ou potes decorados.&nbsp;</p>\r\n\r\n<p><strong>5 &ndash; </strong>a decora&ccedil;&atilde;o da mesa pode seguir o tema da festa (personagens ou cores do tema).&nbsp;</p>\r\n\r\n<p><strong>6 &ndash;</strong> monte a mesa desde o in&iacute;cio da festa e desperte o paladar de seus convidados.&nbsp;</p>\r\n\r\n<p><strong>7 &ndash;</strong> sempre encomende uma quantidade extra de doces, para evitar imprevistos.&nbsp;</p>\r\n\r\n<p><strong>8 &ndash;</strong> utilize doces coloridos para dar mais destaque para a mesa.&nbsp;</p>\r\n\r\n<p><strong>9 &ndash;</strong> junto com as guloseimas tradicionais encomende doces, como ma&ccedil;&atilde; do amor, algod&atilde;o doce, doces personalizados, cupcakes, brigadeiro de colher e mini cheesecake, utilize sua criatividade.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Sugest&atilde;o de doces para a montagem da mesa:</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<table align="left" border="0" cellpadding="5">\r\n	<tbody>\r\n		<tr>\r\n			<td>Bala Sortida</td>\r\n			<td>Bala de Goma</td>\r\n			<td>Bala de Gelatina</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Jujuba</td>\r\n			<td>Chicletes</td>\r\n			<td>Maria Mole</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Mini Geleia</td>\r\n			<td>Pirulitos</td>\r\n			<td>Bombom</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Pa&ccedil;oca</td>\r\n			<td>Pingo de Leite</td>\r\n			<td>Baton</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Bis</td>\r\n			<td>Dadinho</td>\r\n			<td>M&amp;M&#39;s</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n', NULL, 'como-montar-uma-mesa-de-guloseimas', 'Como Montar uma Mesa de Guloseimas', 'Como Montar uma Mesa de Guloseimas', 'Como Montar uma Mesa de Guloseimas', 1, '2014-11-10 14:29:29', '2014-11-10 14:29:29'),
(9, 20, 1, 'Como Surgiu o Brigadeiro!', 'O mais famoso e tipicamente brasileiro, o brigadeiro é unanime quando o assunto é doce de festa. O sucesso fez com que surgissem inúmeras variedades, o gourmet, de copinho ou com diversos tipos de confeitos, quem resiste?', '<div class="span6">\r\n<div class="row-fluid">\r\n<div class="span12" style="width: 100% !important;">\r\n<div id="desc-area"><span style="font-size:12px"><span style="font-family:arial,helvetica,sans-serif">O mais famoso e tipicamente brasileiro, o brigadeiro &eacute; unanime quando o assunto &eacute; doce de festa. O sucesso fez com que surgissem in&uacute;meras variedades, o gourmet, de copinho ou com diversos tipos de confeitos, quem resiste?</span></span><br />\r\n&nbsp;\r\n<p><span style="font-size:12px"><span style="font-family:arial,helvetica,sans-serif">Mas como ele surgiu?</span></span></p>\r\n\r\n<p><span style="font-size:12px"><span style="font-family:arial,helvetica,sans-serif">Muitas s&atilde;o as hist&oacute;rias de sua origem, mas a &uacute;nica certeza &eacute; que ele &eacute; um doce puramente brasileiro. Umas das hist&oacute;rias mais famosas contam que um Brigadeiro da aeron&aacute;utica, na d&eacute;cada de 1940, concorreu ao cargo de presidente da Rep&uacute;blica e ficou famoso por distribuir um docinho de chocolate coberto com confeito. A guloseima caiu no gosto popular at&eacute; os dias de hoje, conquistando uma legi&atilde;o de f&atilde;s.</span></span></p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n', NULL, 'como-surgiu-o-brigadeiro', 'Como Surgiu o Brigadeiro', 'Como Surgiu o Brigadeiro', 'Como Surgiu o Brigadeiro', 1, '2014-11-10 14:35:02', '2014-11-10 14:35:02'),
(11, 21, 2, 'teste', 'Os docinhos, por si só, já são destaques nas festas e uma forma de deixar qual quer um com água na boca é montar uma mesa caprichada de guloseimas, é sucesso garantido. Pode-se utilizar doces personalizados, juntamente com doces tradicionais como brigadeiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiii', '<p>Os docinhos, por si s&oacute;, j&aacute; s&atilde;o destaques nas festas e uma forma de deixar qual quer um com &aacute;gua na boca &eacute; montar uma mesa caprichada de guloseimas, &eacute; sucesso garantido. Pode-se utilizar doces personalizados, juntamente com doces tradicionais como brigadeiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiii</p>\r\n', 'ga_.jpg', 'teste', 'docinhos', 'docinhos', 'docinhos', 1, '2014-11-10 15:09:18', '2014-11-10 15:09:18');

-- --------------------------------------------------------

--
-- Estrutura da tabela `conteudo_categoria`
--

CREATE TABLE IF NOT EXISTS `conteudo_categoria` (
`id` int(11) NOT NULL,
  `categoria_pai_id` int(11) DEFAULT NULL,
  `categoria` varchar(100) NOT NULL,
  `url` varchar(150) NOT NULL,
  `descricao` text,
  `titulo_pag` varchar(100) NOT NULL,
  `descricao_pag` varchar(255) NOT NULL,
  `palavras_pag` varchar(255) NOT NULL,
  `tipo_categoria` enum('Pai','Filha') NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=25 ;

--
-- Extraindo dados da tabela `conteudo_categoria`
--

INSERT INTO `conteudo_categoria` (`id`, `categoria_pai_id`, `categoria`, `url`, `descricao`, `titulo_pag`, `descricao_pag`, `palavras_pag`, `tipo_categoria`, `status`, `created_at`, `updated_at`) VALUES
(15, NULL, 'Viagem', 'viagem', 'Categoria de Viagem', 'Viagem', 'Viagem', 'Viagem', 'Pai', 1, '2014-11-10 13:16:42', '2014-11-10 13:16:42'),
(20, 15, 'Viagem nacional', 'viagem-nacional', 'Viagem nacional', 'Viagem nacional', 'Viagem nacional', 'Viagem nacional', 'Filha', 1, '2014-11-10 13:41:14', '2014-11-10 14:05:03'),
(21, 15, 'Viagem Internacional', 'viagem-internacional', 'Viagem Internacional', 'Viagem Internacional', 'Viagem Internacional', 'Viagem Internacional', 'Filha', 1, '2014-11-10 13:41:51', '2014-11-10 13:41:51'),
(24, NULL, 'Teste', 'teste', 'Teste', 'Teste', 'Teste', 'Teste', 'Pai', 0, '2014-11-10 13:57:55', '2014-11-10 13:57:55');

-- --------------------------------------------------------

--
-- Estrutura da tabela `conteudo_comentario`
--

CREATE TABLE IF NOT EXISTS `conteudo_comentario` (
`id` int(11) NOT NULL,
  `user_id` int(10) NOT NULL,
  `conteudo_id` int(11) NOT NULL,
  `comentario` text NOT NULL,
  `st_aprovado` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `conteudo_comentario`
--

INSERT INTO `conteudo_comentario` (`id`, `user_id`, `conteudo_id`, `comentario`, `st_aprovado`, `created_at`, `updated_at`) VALUES
(5, 1, 8, 'lalalala e lelelele', 1, '2014-11-10 02:00:00', '2014-11-10 14:42:25');

-- --------------------------------------------------------

--
-- Estrutura da tabela `conteudo_status`
--

CREATE TABLE IF NOT EXISTS `conteudo_status` (
`id` int(11) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `conteudo_status`
--

INSERT INTO `conteudo_status` (`id`, `status`) VALUES
(1, 'Rascunho'),
(2, 'Aprovado');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cota_pagamento`
--

CREATE TABLE IF NOT EXISTS `cota_pagamento` (
`id` int(11) NOT NULL,
  `pedido_id` int(11) NOT NULL,
  `pagamento_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cota_pedido`
--

CREATE TABLE IF NOT EXISTS `cota_pedido` (
`id` int(11) NOT NULL,
  `cota_id` int(11) NOT NULL,
  `user_id` int(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `co_bloco`
--

CREATE TABLE IF NOT EXISTS `co_bloco` (
`id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `forma_pagamento`
--

CREATE TABLE IF NOT EXISTS `forma_pagamento` (
`id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `ge_categoria`
--

CREATE TABLE IF NOT EXISTS `ge_categoria` (
`id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `descricao` text NOT NULL,
  `ordem` int(11) NOT NULL,
  `path_img` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `ge_foto`
--

CREATE TABLE IF NOT EXISTS `ge_foto` (
`id` int(11) NOT NULL,
  `cliente_id` int(11) NOT NULL,
  `regiao_id` int(11) NOT NULL,
  `categoria_id` int(11) NOT NULL,
  `foto_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `ge_metrica`
--

CREATE TABLE IF NOT EXISTS `ge_metrica` (
`id` int(11) NOT NULL,
  `metrica_tipo_id` int(11) NOT NULL,
  `cliente_id` int(11) NOT NULL,
  `regiao_id` int(11) NOT NULL,
  `categoria_id` int(11) NOT NULL,
  `foto_id` int(11) DEFAULT NULL,
  `video_id` int(11) DEFAULT NULL,
  `ip` varchar(45) NOT NULL,
  `user_agent` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `ge_plano`
--

CREATE TABLE IF NOT EXISTS `ge_plano` (
`id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `qtd_imagem` int(11) NOT NULL,
  `qtd_video` int(11) NOT NULL,
  `qtd_nivel` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `ge_regiao`
--

CREATE TABLE IF NOT EXISTS `ge_regiao` (
`id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `ordem` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `ge_video`
--

CREATE TABLE IF NOT EXISTS `ge_video` (
`id_ge_video` int(11) NOT NULL,
  `cliente_id` int(11) NOT NULL,
  `regiao_id` int(11) NOT NULL,
  `categoria_id` int(11) NOT NULL,
  `video_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `guia_empresa`
--

CREATE TABLE IF NOT EXISTS `guia_empresa` (
  `cliente_id` int(11) NOT NULL,
  `regiao_id` int(11) NOT NULL,
  `categoria_id` int(11) NOT NULL,
  `dt_ini` date NOT NULL,
  `dt_fim` date NOT NULL,
  `qtd_imagem` int(11) DEFAULT NULL,
  `qtd_video` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `layout`
--

CREATE TABLE IF NOT EXISTS `layout` (
`id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `cores?` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `metrica_tipo`
--

CREATE TABLE IF NOT EXISTS `metrica_tipo` (
`id` int(11) NOT NULL,
  `metrica` varchar(100) NOT NULL,
  `descricao` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pontos`
--

CREATE TABLE IF NOT EXISTS `pontos` (
  `id` int(11) NOT NULL,
  `acoes_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE IF NOT EXISTS `produto` (
`id_produto` int(11) NOT NULL,
  `cliente_id` int(11) NOT NULL,
  `categoria_id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `descricao` text,
  `vl_antigo` float DEFAULT NULL,
  `vl_atual` float NOT NULL,
  `url` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto_categoria`
--

CREATE TABLE IF NOT EXISTS `produto_categoria` (
`id` int(11) NOT NULL,
  `categoria_id` int(11) DEFAULT NULL,
  `nome` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `tipo_categoria` enum('Pai','Filha') NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `site`
--

CREATE TABLE IF NOT EXISTS `site` (
`id` int(11) NOT NULL,
  `user_id` int(10) NOT NULL,
  `tipo_id` int(11) NOT NULL,
  `plano_id` int(11) NOT NULL,
  `layout_id` int(11) DEFAULT NULL,
  `nm_evento` varchar(255) NOT NULL,
  `dt_evento` datetime NOT NULL,
  `local` varchar(255) DEFAULT NULL,
  `cep` int(8) DEFAULT NULL,
  `endereco` varchar(255) DEFAULT NULL,
  `numero` varchar(10) DEFAULT NULL,
  `complemento` varchar(255) DEFAULT NULL,
  `bairro` varchar(255) DEFAULT NULL,
  `cidade` varchar(255) DEFAULT NULL,
  `uf` varchar(2) DEFAULT NULL,
  `referencia_local` varchar(255) DEFAULT NULL,
  `dt_ini_veiculacao` date NOT NULL,
  `dt_fim_veiculacao` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `site_cota`
--

CREATE TABLE IF NOT EXISTS `site_cota` (
`id` int(11) NOT NULL,
  `site_id` int(11) NOT NULL,
  `produto_id` int(11) NOT NULL,
  `qtd_cota` int(11) NOT NULL,
  `valor_cota` float NOT NULL,
  `valor_total` float NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `site_foto`
--

CREATE TABLE IF NOT EXISTS `site_foto` (
`id` int(11) NOT NULL,
  `site_id` int(11) NOT NULL,
  `path_img` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `site_funcionalidade`
--

CREATE TABLE IF NOT EXISTS `site_funcionalidade` (
`id` int(11) NOT NULL,
  `plano_id` int(11) NOT NULL,
  `qtd_foto` int(11) NOT NULL,
  `qtd_pagina` int(11) NOT NULL,
  `qtd_video` int(11) NOT NULL,
  `st_protecao_senha` tinyint(1) NOT NULL,
  `st_contator_acesso` tinyint(1) NOT NULL,
  `st_contagem_regressiva` tinyint(1) NOT NULL,
  `st_mural` tinyint(1) NOT NULL,
  `st_cota` tinyint(1) NOT NULL,
  `st_divulgacao` tinyint(1) NOT NULL,
  `st_facebook` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `site_pagamento`
--

CREATE TABLE IF NOT EXISTS `site_pagamento` (
  `id` int(11) NOT NULL,
  `site_id` int(11) NOT NULL,
  `pagamento_id` int(11) NOT NULL,
  `dt_pagamento` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `site_pagina`
--

CREATE TABLE IF NOT EXISTS `site_pagina` (
`id` int(11) NOT NULL,
  `site_id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `txt_conteudo` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `site_periodo`
--

CREATE TABLE IF NOT EXISTS `site_periodo` (
`id` int(11) NOT NULL,
  `periodo` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `site_plano`
--

CREATE TABLE IF NOT EXISTS `site_plano` (
`id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `site_plano_periodo`
--

CREATE TABLE IF NOT EXISTS `site_plano_periodo` (
`id` int(11) NOT NULL,
  `plano_id` int(11) NOT NULL,
  `periodo_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `site_tipo`
--

CREATE TABLE IF NOT EXISTS `site_tipo` (
`id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `site_video`
--

CREATE TABLE IF NOT EXISTS `site_video` (
`id` int(11) NOT NULL,
  `site_id` int(11) NOT NULL,
  `url` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `throttle`
--

CREATE TABLE IF NOT EXISTS `throttle` (
`id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned DEFAULT NULL,
  `ip_address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `attempts` int(11) NOT NULL DEFAULT '0',
  `suspended` tinyint(1) NOT NULL DEFAULT '0',
  `banned` tinyint(1) NOT NULL DEFAULT '0',
  `last_attempt_at` timestamp NULL DEFAULT NULL,
  `suspended_at` timestamp NULL DEFAULT NULL,
  `banned_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `throttle`
--

INSERT INTO `throttle` (`id`, `user_id`, `ip_address`, `attempts`, `suspended`, `banned`, `last_attempt_at`, `suspended_at`, `banned_at`) VALUES
(3, 1, NULL, 0, 0, 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(10) NOT NULL,
  `perfil_id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8_unicode_ci,
  `activated` tinyint(1) NOT NULL DEFAULT '0',
  `activation_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `activated_at` timestamp NULL DEFAULT NULL,
  `last_login` timestamp NULL DEFAULT NULL,
  `persist_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `reset_password_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dt_nascimento` date NOT NULL,
  `genero` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `utm_source` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `utm_medium` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `utm_term` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `utm_content` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `utm_campaign` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `perfil_id`, `email`, `password`, `permissions`, `activated`, `activation_code`, `activated_at`, `last_login`, `persist_code`, `reset_password_code`, `first_name`, `last_name`, `dt_nascimento`, `genero`, `utm_source`, `utm_medium`, `utm_term`, `utm_content`, `utm_campaign`, `updated_at`, `created_at`) VALUES
(1, 1, 'admin@admin.com', '$2y$10$ByEdlYlDWMoAKaeWlMx.MeqrDerKrMf3C9pXZfWVupxFZ35ufgoWe', NULL, 1, NULL, NULL, '2014-11-10 15:08:37', '$2y$10$.pZH8wS2P190wlFQuYW.ReRQldMc.xq0cLU1RPvF8Io6N.VHCyajO', NULL, 'John', 'Doe', '2014-01-01', 'M', NULL, NULL, NULL, NULL, NULL, '2014-11-10 15:08:37', '2014-10-31 15:47:20'),
(4, 2, 'jhowr28@gmail.com', '$2y$10$4yJct23R8FUK0I3xg3nVY.FU5neHZCCld12DfdT1ChmJ/iPQHi5i2', NULL, 0, 'S0lrEijdlPMc3bqB1qbmHl8Eg5khdA20LjP3xO0hSP', NULL, NULL, NULL, NULL, 'jonathan', 'rossi', '1988-01-14', 'M', 'facebook.fanpage', 'teste', 'sonho', 'sonho.viagem', 'novos.cadastro', '2014-11-04 15:52:04', '2014-11-04 15:52:03'),
(5, 2, 'teste@teste.com.br', '$2y$10$7Js9tH0f2J7ZeOp1ll17zOzsToTnGUpHVOXAdN4JgAcFSr0H7XXue', NULL, 0, 'hJJKZoPGfIF8cW8zgGnAdREE0JDZCFANgAPk41TAKE', NULL, NULL, NULL, NULL, 'Teste', 'Teste', '1988-01-14', 'M', 'facebook.grupo', 'teste', 'sonho', 'sonho.viagem', 'novos.cadastro', '2014-11-04 20:58:36', '2014-11-04 15:53:24');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users_groups`
--

CREATE TABLE IF NOT EXISTS `users_groups` (
  `user_id` int(10) unsigned NOT NULL,
  `group_id` int(10) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario_funcionalidades`
--

CREATE TABLE IF NOT EXISTS `usuario_funcionalidades` (
`id` int(11) NOT NULL,
  `funcionalidade` varchar(255) NOT NULL,
  `metodo` varchar(255) NOT NULL,
  `modulo` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Extraindo dados da tabela `usuario_funcionalidades`
--

INSERT INTO `usuario_funcionalidades` (`id`, `funcionalidade`, `metodo`, `modulo`) VALUES
(1, 'Acesso Total ao Sistema', '*', 'Geral'),
(2, 'Listar usuários', 'admin.user.index', 'Usuário'),
(3, 'Formulário de inclusão de usuário', 'admin.user.create', 'Usuário'),
(4, 'Adicionar usuário', 'admin.user.store', 'Usuário'),
(5, 'Formulário de alteração de usuário', 'admin.user.edit', 'Usuário'),
(6, 'Alterar usuário', 'admin.user.update', 'Usuário'),
(7, 'Apagar usuário', 'admin.user.destroy', 'Usuário'),
(8, 'Listar perfis', 'admin.perfil.index', 'Perfil'),
(9, 'Formulário de inclusão de perfil', 'admin.perfil.create', 'Perfil'),
(10, 'Adicionar perfil', 'admin.perfil.store', 'Perfil'),
(11, 'Formulário de alteração de perfil', 'admin.perfil.edit', 'Perfil'),
(12, 'Alterar perfil', 'admin.perfil.update', 'Perfil'),
(13, 'Apagar perfil', 'admin.perfil.destroy', 'Perfil');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario_funcionalidades_perfis`
--

CREATE TABLE IF NOT EXISTS `usuario_funcionalidades_perfis` (
`id` int(11) NOT NULL,
  `perfil_id` int(11) NOT NULL,
  `funcionalidade_id` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `usuario_funcionalidades_perfis`
--

INSERT INTO `usuario_funcionalidades_perfis` (`id`, `perfil_id`, `funcionalidade_id`) VALUES
(1, 1, 1),
(3, 2, 2),
(6, 6, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario_log_acesso`
--

CREATE TABLE IF NOT EXISTS `usuario_log_acesso` (
`id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `ip` varchar(45) DEFAULT NULL,
  `user_agent` varchar(255) DEFAULT NULL,
  `log` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=37 ;

--
-- Extraindo dados da tabela `usuario_log_acesso`
--

INSERT INTO `usuario_log_acesso` (`id`, `user_id`, `ip`, `user_agent`, `log`, `created_at`, `updated_at`) VALUES
(13, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/38.0.2125.111 Safari/537.36', NULL, '2014-11-04 15:42:47', '2014-11-04 15:42:47'),
(14, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:33.0) Gecko/20100101 Firefox/33.0', NULL, '2014-11-04 17:59:43', '2014-11-04 17:59:43'),
(15, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/38.0.2125.111 Safari/537.36', NULL, '2014-11-04 18:18:28', '2014-11-04 18:18:28'),
(16, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:33.0) Gecko/20100101 Firefox/33.0', NULL, '2014-11-04 20:07:49', '2014-11-04 20:07:49'),
(17, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:33.0) Gecko/20100101 Firefox/33.0', NULL, '2014-11-04 20:54:20', '2014-11-04 20:54:20'),
(18, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:33.0) Gecko/20100101 Firefox/33.0', NULL, '2014-11-04 22:00:33', '2014-11-04 22:00:33'),
(19, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:33.0) Gecko/20100101 Firefox/33.0', NULL, '2014-11-05 13:23:18', '2014-11-05 13:23:18'),
(20, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:33.0) Gecko/20100101 Firefox/33.0', NULL, '2014-11-05 14:18:21', '2014-11-05 14:18:21'),
(21, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:33.0) Gecko/20100101 Firefox/33.0', NULL, '2014-11-05 14:19:29', '2014-11-05 14:19:29'),
(22, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:33.0) Gecko/20100101 Firefox/33.0', NULL, '2014-11-05 15:25:19', '2014-11-05 15:25:19'),
(23, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:33.0) Gecko/20100101 Firefox/33.0', NULL, '2014-11-05 17:51:12', '2014-11-05 17:51:12'),
(24, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:33.0) Gecko/20100101 Firefox/33.0', NULL, '2014-11-05 19:53:41', '2014-11-05 19:53:41'),
(25, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:33.0) Gecko/20100101 Firefox/33.0', NULL, '2014-11-05 22:00:00', '2014-11-05 22:00:00'),
(26, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:33.0) Gecko/20100101 Firefox/33.0', NULL, '2014-11-06 14:13:06', '2014-11-06 14:13:06'),
(27, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:33.0) Gecko/20100101 Firefox/33.0', NULL, '2014-11-06 16:15:44', '2014-11-06 16:15:44'),
(28, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:33.0) Gecko/20100101 Firefox/33.0', NULL, '2014-11-06 18:16:09', '2014-11-06 18:16:09'),
(29, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:33.0) Gecko/20100101 Firefox/33.0', NULL, '2014-11-06 21:17:51', '2014-11-06 21:17:51'),
(30, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:33.0) Gecko/20100101 Firefox/33.0', NULL, '2014-11-07 13:10:43', '2014-11-07 13:10:43'),
(31, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:33.0) Gecko/20100101 Firefox/33.0', NULL, '2014-11-07 13:46:54', '2014-11-07 13:46:54'),
(32, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:33.0) Gecko/20100101 Firefox/33.0', NULL, '2014-11-07 15:16:26', '2014-11-07 15:16:26'),
(33, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:33.0) Gecko/20100101 Firefox/33.0', NULL, '2014-11-07 18:55:40', '2014-11-07 18:55:40'),
(34, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:33.0) Gecko/20100101 Firefox/33.0', NULL, '2014-11-07 21:00:23', '2014-11-07 21:00:23'),
(35, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:33.0) Gecko/20100101 Firefox/33.0', NULL, '2014-11-10 13:07:48', '2014-11-10 13:07:48'),
(36, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:33.0) Gecko/20100101 Firefox/33.0', NULL, '2014-11-10 15:08:37', '2014-11-10 15:08:37');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario_perfis`
--

CREATE TABLE IF NOT EXISTS `usuario_perfis` (
`id` int(11) NOT NULL,
  `perfil` varchar(100) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `st_admin` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `usuario_perfis`
--

INSERT INTO `usuario_perfis` (`id`, `perfil`, `descricao`, `st_admin`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'Administrador', 1, '2014-10-31 15:47:20', '2014-10-31 15:47:20'),
(2, 'Usuário', 'Usuário site', 0, '2014-10-31 15:47:20', '2014-10-31 15:47:20'),
(6, 'teste', 'teste', 1, '2014-11-04 20:08:06', '2014-11-04 20:11:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acoes`
--
ALTER TABLE `acoes`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `anuncio`
--
ALTER TABLE `anuncio`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_anuncio_campanha1_idx` (`campanha_id`), ADD KEY `fk_anuncio_ba_bloco1_idx` (`bloco_id`);

--
-- Indexes for table `anuncio_metrica`
--
ALTER TABLE `anuncio_metrica`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_anuncio_metrica_metrica_tipo1_idx` (`metrica_tipo_id`), ADD KEY `fk_anuncio_metrica_anuncio1_idx` (`anuncio_id`);

--
-- Indexes for table `ba_bloco`
--
ALTER TABLE `ba_bloco`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `campanha`
--
ALTER TABLE `campanha`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_campanha_cliente1_idx` (`cliente_id`);

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cliente_contrato`
--
ALTER TABLE `cliente_contrato`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `cliente_id_UNIQUE` (`cliente_id`), ADD KEY `fk_cliente_contrato_cliente1_idx` (`cliente_id`);

--
-- Indexes for table `cliente_foto`
--
ALTER TABLE `cliente_foto`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_cliente_foto_cliente1_idx` (`cliente_id`);

--
-- Indexes for table `cliente_video`
--
ALTER TABLE `cliente_video`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_cliente_video_cliente1_idx` (`cliente_id`);

--
-- Indexes for table `conteudo`
--
ALTER TABLE `conteudo`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `url_UNIQUE` (`url`), ADD KEY `fk_conteudo_co_status1_idx` (`status_id`), ADD KEY `fk_conteudo_co_categoria1_idx` (`categoria_id`);

--
-- Indexes for table `conteudo_categoria`
--
ALTER TABLE `conteudo_categoria`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `url_UNIQUE` (`url`), ADD UNIQUE KEY `categoria_UNIQUE` (`categoria`), ADD UNIQUE KEY `titulo_pag_UNIQUE` (`titulo_pag`), ADD KEY `fk_co_categoria_co_categoria1_idx` (`categoria_pai_id`);

--
-- Indexes for table `conteudo_comentario`
--
ALTER TABLE `conteudo_comentario`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_co_comentario_conteudo1_idx` (`conteudo_id`), ADD KEY `fk_co_comentario_users1_idx` (`user_id`);

--
-- Indexes for table `conteudo_status`
--
ALTER TABLE `conteudo_status`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cota_pagamento`
--
ALTER TABLE `cota_pagamento`
 ADD PRIMARY KEY (`id`,`pedido_id`), ADD UNIQUE KEY `cota_pedido_id_UNIQUE` (`pedido_id`), ADD KEY `fk_cota_pagamento_cota_pedido1_idx` (`pedido_id`), ADD KEY `fk_cota_pagamento_forma_pagamento1_idx` (`pagamento_id`);

--
-- Indexes for table `cota_pedido`
--
ALTER TABLE `cota_pedido`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_site_cota_pedido_site_cota1_idx` (`cota_id`), ADD KEY `fk_cota_pedido_users1_idx` (`user_id`);

--
-- Indexes for table `co_bloco`
--
ALTER TABLE `co_bloco`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forma_pagamento`
--
ALTER TABLE `forma_pagamento`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ge_categoria`
--
ALTER TABLE `ge_categoria`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ge_foto`
--
ALTER TABLE `ge_foto`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_ge_foto_guia_empresa1_idx` (`cliente_id`,`regiao_id`,`categoria_id`), ADD KEY `fk_ge_foto_cliente_foto1_idx` (`foto_id`);

--
-- Indexes for table `ge_metrica`
--
ALTER TABLE `ge_metrica`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_empresa_metrica_empresa_metrica_tipo1_idx` (`metrica_tipo_id`), ADD KEY `fk_ge_metrica_guia_empresa1_idx` (`cliente_id`,`regiao_id`,`categoria_id`), ADD KEY `fk_ge_metrica_ge_foto1_idx` (`foto_id`), ADD KEY `fk_ge_metrica_ge_video1_idx` (`video_id`);

--
-- Indexes for table `ge_plano`
--
ALTER TABLE `ge_plano`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `nu_nivel_UNIQUE` (`qtd_nivel`);

--
-- Indexes for table `ge_regiao`
--
ALTER TABLE `ge_regiao`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ge_video`
--
ALTER TABLE `ge_video`
 ADD PRIMARY KEY (`id_ge_video`), ADD KEY `fk_ge_video_guia_empresa1_idx` (`cliente_id`,`regiao_id`,`categoria_id`), ADD KEY `fk_ge_video_cliente_video1_idx` (`video_id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `groups_name_unique` (`name`);

--
-- Indexes for table `guia_empresa`
--
ALTER TABLE `guia_empresa`
 ADD PRIMARY KEY (`cliente_id`,`regiao_id`,`categoria_id`), ADD KEY `fk_guia_empresa_cliente1_idx` (`cliente_id`), ADD KEY `fk_guia_empresa_ge_regiao1_idx` (`regiao_id`), ADD KEY `fk_guia_empresa_ge_categoria1_idx` (`categoria_id`);

--
-- Indexes for table `layout`
--
ALTER TABLE `layout`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `metrica_tipo`
--
ALTER TABLE `metrica_tipo`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pontos`
--
ALTER TABLE `pontos`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_pontos_acoes1_idx` (`acoes_id`);

--
-- Indexes for table `produto`
--
ALTER TABLE `produto`
 ADD PRIMARY KEY (`id_produto`), ADD KEY `fk_cotas_cliente1_idx` (`cliente_id`), ADD KEY `fk_produto_produto_categoria1_idx` (`categoria_id`);

--
-- Indexes for table `produto_categoria`
--
ALTER TABLE `produto_categoria`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_produto_categoria_produto_categoria1_idx` (`categoria_id`);

--
-- Indexes for table `site`
--
ALTER TABLE `site`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_site_plano1_idx` (`plano_id`), ADD KEY `fk_site_layout1_idx` (`layout_id`), ADD KEY `fk_site_site_tipo1_idx` (`tipo_id`), ADD KEY `fk_site_users1_idx` (`user_id`);

--
-- Indexes for table `site_cota`
--
ALTER TABLE `site_cota`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_site_cotas_site1_idx` (`site_id`), ADD KEY `fk_site_cotas_produto1_idx` (`produto_id`);

--
-- Indexes for table `site_foto`
--
ALTER TABLE `site_foto`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_site_fotos_site1_idx` (`site_id`);

--
-- Indexes for table `site_funcionalidade`
--
ALTER TABLE `site_funcionalidade`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_site_funcionalidade_plano1_idx` (`plano_id`);

--
-- Indexes for table `site_pagamento`
--
ALTER TABLE `site_pagamento`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_pagamentos_site1_idx` (`site_id`), ADD KEY `fk_site_pagamento_forma_pagamento1_idx` (`pagamento_id`);

--
-- Indexes for table `site_pagina`
--
ALTER TABLE `site_pagina`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_site_paginas_site1_idx` (`site_id`);

--
-- Indexes for table `site_periodo`
--
ALTER TABLE `site_periodo`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_plano`
--
ALTER TABLE `site_plano`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `nome_UNIQUE` (`nome`);

--
-- Indexes for table `site_plano_periodo`
--
ALTER TABLE `site_plano_periodo`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_site_plano_periodo_site_plano1_idx` (`plano_id`), ADD KEY `fk_site_plano_periodo_site_periodo1_idx` (`periodo_id`);

--
-- Indexes for table `site_tipo`
--
ALTER TABLE `site_tipo`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `nome_UNIQUE` (`nome`);

--
-- Indexes for table `site_video`
--
ALTER TABLE `site_video`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_site_videos_site1_idx` (`site_id`);

--
-- Indexes for table `throttle`
--
ALTER TABLE `throttle`
 ADD PRIMARY KEY (`id`), ADD KEY `throttle_user_id_index` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `email_UNIQUE` (`email`), ADD KEY `users_activation_code_index` (`activation_code`), ADD KEY `users_reset_password_code_index` (`reset_password_code`), ADD KEY `fk_users_perfis1_idx` (`perfil_id`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
 ADD PRIMARY KEY (`user_id`,`group_id`);

--
-- Indexes for table `usuario_funcionalidades`
--
ALTER TABLE `usuario_funcionalidades`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuario_funcionalidades_perfis`
--
ALTER TABLE `usuario_funcionalidades_perfis`
 ADD PRIMARY KEY (`id`), ADD KEY `fk_funcionalidades_perfis_funcionalidade1_idx` (`funcionalidade_id`), ADD KEY `fk_funcionalidades_perfis_perfis1_idx` (`perfil_id`);

--
-- Indexes for table `usuario_log_acesso`
--
ALTER TABLE `usuario_log_acesso`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuario_perfis`
--
ALTER TABLE `usuario_perfis`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `perfil_UNIQUE` (`perfil`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acoes`
--
ALTER TABLE `acoes`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `anuncio_metrica`
--
ALTER TABLE `anuncio_metrica`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cliente_contrato`
--
ALTER TABLE `cliente_contrato`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cliente_foto`
--
ALTER TABLE `cliente_foto`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cliente_video`
--
ALTER TABLE `cliente_video`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `conteudo`
--
ALTER TABLE `conteudo`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `conteudo_categoria`
--
ALTER TABLE `conteudo_categoria`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `conteudo_comentario`
--
ALTER TABLE `conteudo_comentario`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `conteudo_status`
--
ALTER TABLE `conteudo_status`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `cota_pagamento`
--
ALTER TABLE `cota_pagamento`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cota_pedido`
--
ALTER TABLE `cota_pedido`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `co_bloco`
--
ALTER TABLE `co_bloco`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `forma_pagamento`
--
ALTER TABLE `forma_pagamento`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ge_categoria`
--
ALTER TABLE `ge_categoria`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ge_foto`
--
ALTER TABLE `ge_foto`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ge_metrica`
--
ALTER TABLE `ge_metrica`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ge_plano`
--
ALTER TABLE `ge_plano`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ge_regiao`
--
ALTER TABLE `ge_regiao`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ge_video`
--
ALTER TABLE `ge_video`
MODIFY `id_ge_video` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `layout`
--
ALTER TABLE `layout`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `metrica_tipo`
--
ALTER TABLE `metrica_tipo`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `produto`
--
ALTER TABLE `produto`
MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `produto_categoria`
--
ALTER TABLE `produto_categoria`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `site`
--
ALTER TABLE `site`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `site_cota`
--
ALTER TABLE `site_cota`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `site_foto`
--
ALTER TABLE `site_foto`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `site_funcionalidade`
--
ALTER TABLE `site_funcionalidade`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `site_pagina`
--
ALTER TABLE `site_pagina`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `site_periodo`
--
ALTER TABLE `site_periodo`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `site_plano`
--
ALTER TABLE `site_plano`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `site_plano_periodo`
--
ALTER TABLE `site_plano_periodo`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `site_tipo`
--
ALTER TABLE `site_tipo`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `site_video`
--
ALTER TABLE `site_video`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `throttle`
--
ALTER TABLE `throttle`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `usuario_funcionalidades`
--
ALTER TABLE `usuario_funcionalidades`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `usuario_funcionalidades_perfis`
--
ALTER TABLE `usuario_funcionalidades_perfis`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `usuario_log_acesso`
--
ALTER TABLE `usuario_log_acesso`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `usuario_perfis`
--
ALTER TABLE `usuario_perfis`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `anuncio`
--
ALTER TABLE `anuncio`
ADD CONSTRAINT `fk_anuncio_ba_bloco1` FOREIGN KEY (`bloco_id`) REFERENCES `ba_bloco` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_anuncio_campanha1` FOREIGN KEY (`campanha_id`) REFERENCES `campanha` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `anuncio_metrica`
--
ALTER TABLE `anuncio_metrica`
ADD CONSTRAINT `fk_anuncio_metrica_anuncio1` FOREIGN KEY (`anuncio_id`) REFERENCES `anuncio` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_anuncio_metrica_metrica_tipo1` FOREIGN KEY (`metrica_tipo_id`) REFERENCES `metrica_tipo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `campanha`
--
ALTER TABLE `campanha`
ADD CONSTRAINT `fk_campanha_cliente1` FOREIGN KEY (`cliente_id`) REFERENCES `cliente` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `cliente_contrato`
--
ALTER TABLE `cliente_contrato`
ADD CONSTRAINT `fk_cliente_contrato_cliente1` FOREIGN KEY (`cliente_id`) REFERENCES `cliente` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `cliente_foto`
--
ALTER TABLE `cliente_foto`
ADD CONSTRAINT `fk_cliente_foto_cliente1` FOREIGN KEY (`cliente_id`) REFERENCES `cliente` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `cliente_video`
--
ALTER TABLE `cliente_video`
ADD CONSTRAINT `fk_cliente_video_cliente1` FOREIGN KEY (`cliente_id`) REFERENCES `cliente` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `conteudo`
--
ALTER TABLE `conteudo`
ADD CONSTRAINT `fk_conteudo_co_categoria1` FOREIGN KEY (`categoria_id`) REFERENCES `conteudo_categoria` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_conteudo_co_status1` FOREIGN KEY (`status_id`) REFERENCES `conteudo_status` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `conteudo_categoria`
--
ALTER TABLE `conteudo_categoria`
ADD CONSTRAINT `fk_co_categoria_co_categoria1` FOREIGN KEY (`categoria_pai_id`) REFERENCES `conteudo_categoria` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `conteudo_comentario`
--
ALTER TABLE `conteudo_comentario`
ADD CONSTRAINT `fk_co_comentario_conteudo1` FOREIGN KEY (`conteudo_id`) REFERENCES `conteudo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_co_comentario_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `cota_pagamento`
--
ALTER TABLE `cota_pagamento`
ADD CONSTRAINT `fk_cota_pagamento_cota_pedido1` FOREIGN KEY (`pedido_id`) REFERENCES `cota_pedido` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_cota_pagamento_forma_pagamento1` FOREIGN KEY (`pagamento_id`) REFERENCES `forma_pagamento` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `cota_pedido`
--
ALTER TABLE `cota_pedido`
ADD CONSTRAINT `fk_cota_pedido_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_site_cota_pedido_site_cota1` FOREIGN KEY (`cota_id`) REFERENCES `site_cota` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `ge_foto`
--
ALTER TABLE `ge_foto`
ADD CONSTRAINT `fk_ge_foto_cliente_foto1` FOREIGN KEY (`foto_id`) REFERENCES `cliente_foto` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_ge_foto_guia_empresa1` FOREIGN KEY (`cliente_id`, `regiao_id`, `categoria_id`) REFERENCES `guia_empresa` (`cliente_id`, `regiao_id`, `categoria_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `ge_metrica`
--
ALTER TABLE `ge_metrica`
ADD CONSTRAINT `fk_empresa_metrica_empresa_metrica_tipo1` FOREIGN KEY (`metrica_tipo_id`) REFERENCES `metrica_tipo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_ge_metrica_ge_foto1` FOREIGN KEY (`foto_id`) REFERENCES `ge_foto` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_ge_metrica_ge_video1` FOREIGN KEY (`video_id`) REFERENCES `ge_video` (`id_ge_video`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_ge_metrica_guia_empresa1` FOREIGN KEY (`cliente_id`, `regiao_id`, `categoria_id`) REFERENCES `guia_empresa` (`cliente_id`, `regiao_id`, `categoria_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `ge_video`
--
ALTER TABLE `ge_video`
ADD CONSTRAINT `fk_ge_video_cliente_video1` FOREIGN KEY (`video_id`) REFERENCES `cliente_video` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_ge_video_guia_empresa1` FOREIGN KEY (`cliente_id`, `regiao_id`, `categoria_id`) REFERENCES `guia_empresa` (`cliente_id`, `regiao_id`, `categoria_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `guia_empresa`
--
ALTER TABLE `guia_empresa`
ADD CONSTRAINT `fk_guia_empresa_cliente1` FOREIGN KEY (`cliente_id`) REFERENCES `cliente` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_guia_empresa_ge_categoria1` FOREIGN KEY (`categoria_id`) REFERENCES `ge_categoria` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_guia_empresa_ge_regiao1` FOREIGN KEY (`regiao_id`) REFERENCES `ge_regiao` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `pontos`
--
ALTER TABLE `pontos`
ADD CONSTRAINT `fk_pontos_acoes1` FOREIGN KEY (`acoes_id`) REFERENCES `acoes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `produto`
--
ALTER TABLE `produto`
ADD CONSTRAINT `fk_cotas_cliente1` FOREIGN KEY (`cliente_id`) REFERENCES `cliente` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_produto_produto_categoria1` FOREIGN KEY (`categoria_id`) REFERENCES `produto_categoria` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `produto_categoria`
--
ALTER TABLE `produto_categoria`
ADD CONSTRAINT `fk_produto_categoria_produto_categoria1` FOREIGN KEY (`categoria_id`) REFERENCES `produto_categoria` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `site`
--
ALTER TABLE `site`
ADD CONSTRAINT `fk_site_layout1` FOREIGN KEY (`layout_id`) REFERENCES `layout` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_site_plano1` FOREIGN KEY (`plano_id`) REFERENCES `site_plano` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_site_site_tipo1` FOREIGN KEY (`tipo_id`) REFERENCES `site_tipo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_site_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `site_cota`
--
ALTER TABLE `site_cota`
ADD CONSTRAINT `fk_site_cotas_produto1` FOREIGN KEY (`produto_id`) REFERENCES `produto` (`id_produto`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_site_cotas_site1` FOREIGN KEY (`site_id`) REFERENCES `site` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `site_foto`
--
ALTER TABLE `site_foto`
ADD CONSTRAINT `fk_site_fotos_site1` FOREIGN KEY (`site_id`) REFERENCES `site` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `site_funcionalidade`
--
ALTER TABLE `site_funcionalidade`
ADD CONSTRAINT `fk_site_funcionalidade_plano1` FOREIGN KEY (`plano_id`) REFERENCES `site_plano` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `site_pagamento`
--
ALTER TABLE `site_pagamento`
ADD CONSTRAINT `fk_pagamentos_site1` FOREIGN KEY (`site_id`) REFERENCES `site` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_site_pagamento_forma_pagamento1` FOREIGN KEY (`pagamento_id`) REFERENCES `forma_pagamento` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `site_pagina`
--
ALTER TABLE `site_pagina`
ADD CONSTRAINT `fk_site_paginas_site1` FOREIGN KEY (`site_id`) REFERENCES `site` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `site_plano_periodo`
--
ALTER TABLE `site_plano_periodo`
ADD CONSTRAINT `fk_site_plano_periodo_site_periodo1` FOREIGN KEY (`periodo_id`) REFERENCES `site_periodo` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_site_plano_periodo_site_plano1` FOREIGN KEY (`plano_id`) REFERENCES `site_plano` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `site_video`
--
ALTER TABLE `site_video`
ADD CONSTRAINT `fk_site_videos_site1` FOREIGN KEY (`site_id`) REFERENCES `site` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `users`
--
ALTER TABLE `users`
ADD CONSTRAINT `fk_users_perfis1` FOREIGN KEY (`perfil_id`) REFERENCES `usuario_perfis` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `usuario_funcionalidades_perfis`
--
ALTER TABLE `usuario_funcionalidades_perfis`
ADD CONSTRAINT `fk_funcionalidades_perfis_funcionalidade1` FOREIGN KEY (`funcionalidade_id`) REFERENCES `usuario_funcionalidades` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_funcionalidades_perfis_perfis1` FOREIGN KEY (`perfil_id`) REFERENCES `usuario_perfis` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
