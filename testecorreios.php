<?php 


$cep = '39000-100';
      
      $nrzipcode = str_replace('-', '', $cep);
      
      //$totals = $this->getProductsTotals();                
          
          $qs = http_build_query([
                  'nCdEmpresa'=>'',
                  'sDsSenha'=>'',
                  'nCdServico'=>'40010',
                  'sCepOrigem'=>'30810100',
                  'sCepDestino'=>$nrzipcode,
                  'nVlPeso'=>1,
                  'nCdFormato'=>'1',
                  'nVlComprimento'=>13,
                  'nVlAltura'=>1,
                  'nVlLargura'=>8,
                  'nVlDiametro'=>'0',
                  'sCdMaoPropria'=>'N',
                  'nVlValorDeclarado'=>false,
                  'sCdAvisoRecebimento'=>'N'
              ]);
          
          $xml = (array)simplexml_load_file("http://ws.correios.com.br/calculador/CalcPrecoPrazo.asmx/CalcPrecoPrazo?".$qs);

          echo json_encode($xml);
          exit;
?>