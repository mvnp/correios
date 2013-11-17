<?php

  /**
   * Contém um exemplo de utilização da classe geração/validação de SRO.
   * 
   * @author Ivan Wilhelm <ivan.whm@me.com>
   * @version 1.0 
   */
  //Ajusta a codificação e o tipo do conteúdo
  header('Content-type: text/txt; charset=utf-8');

  //Importa as classes
  require '../classes/CorreiosSro.php';

  try
  {
    echo '============================' . PHP_EOL;
    echo 'Exemplo de validação de SRO.' . PHP_EOL;
    echo '============================' . PHP_EOL;
    echo 'SRO....: SW592067296BR' . PHP_EOL;
    echo 'Válido.: ' . ((CorreiosSro::validaSro('SW592067296BR')) ? 'Sim' : 'Não') . PHP_EOL . PHP_EOL;
  } catch (Exception $e)
  {
    echo 'Ocorreu um erro: ' . $e->getMessage() . PHP_EOL . PHP_EOL;
  }


  try
  {
    echo '========================' . PHP_EOL;
    echo 'Exemplo de dados do SRO.' . PHP_EOL;
    echo '========================' . PHP_EOL;
    echo 'SRO................: SW592067296BR' . PHP_EOL;
    echo CorreiosSro::retornaDadosSro('SW592067296BR') . PHP_EOL . PHP_EOL;
  } catch (Exception $e)
  {
    echo 'Ocorreu um erro: ' . $e->getMessage() . PHP_EOL . PHP_EOL;
  }

  try
  {
    echo '================================================' . PHP_EOL;
    echo 'Exemplo de geração de dígito verificador de SRO.' . PHP_EOL;
    echo '================================================' . PHP_EOL;
    echo 'Código.: 59206729' . PHP_EOL;
    echo 'Dígito.: ' . CorreiosSro::calculaDigitoVerificador('59206729') . PHP_EOL . PHP_EOL;
  } catch (Exception $e)
  {
    echo 'Ocorreu um erro: ' . $e->getMessage() . PHP_EOL . PHP_EOL;
  }
  