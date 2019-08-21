CREATE TABLE `categoria` (
  `cod_categoria` int(11) NOT NULL,
  `descricao` varchar(100) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;


CREATE TABLE `produto` (
  `cod_produto` int(11) NOT NULL,
  `cod_categoria` int(11) NOT NULL,
  `descricao` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


ALTER TABLE `categoria`
  ADD PRIMARY KEY (`cod_categoria`);


ALTER TABLE `produto`
  ADD PRIMARY KEY (`cod_produto`),
  ADD KEY `categoria` (`cod_categoria`);

  
ALTER TABLE `categoria`
  MODIFY `cod_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

  
ALTER TABLE `produto`
  MODIFY `cod_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

  
ALTER TABLE `produto`
  ADD CONSTRAINT `cod_categoria` FOREIGN KEY (`cod_categoria`) REFERENCES `categoria` (`cod_categoria`) ON UPDATE NO ACTION;
COMMIT;

-- manter ordem dos inserts/integridade da FK
INSERT INTO `categoria` (`cod_categoria`, `descricao`) VALUES(1, 'TESTE1');
INSERT INTO `categoria` (`cod_categoria`, `descricao`) VALUES(2, 'TESTE2');

INSERT INTO `produto` (`cod_produto`, `cod_categoria`, `descricao`) VALUES(9, 1, 'prod1');
INSERT INTO `produto` (`cod_produto`, `cod_categoria`, `descricao`) VALUES(10, 2, 'prod2');
INSERT INTO `produto` (`cod_produto`, `cod_categoria`, `descricao`) VALUES(13, 2, 'prod3');