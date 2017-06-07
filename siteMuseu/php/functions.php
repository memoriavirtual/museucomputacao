<?php
	class Functions{
			
		//Função para incrementar k, que servirá para definir a altura do fundo do texto das páginas que conterá a tabela.
		public function incrementaK($linhas){
			$k=200+($linhas*50);		
			return $k;
		}
		
		
		public function contaDados($pagina){
			$linhaM;
			$linhaC;
			$file = fopen("saida.txt","r");

			while ("%" != ($char = fgetc($file)));
			
			$k=0;
			
			while("$" != ($char = fgetc($file))){
				if($primeira == 0){
					$posicao = ftell($file);
					$tipo = $this->verificaTipoMaquina($char, $file);
					fseek($file, $posicao);
					$primeira=1;
				}
				
				if($char == ","){
					echo" ";
				}elseif($char == ")"){
					$k=0;
					echo"</tr>";
					$char = fgetc($file);
					
				}elseif($char == "("){
					$posicao = ftell($file);
					$tipo = $this->verificaTipoMaquina($char, $file);
					fseek($file, $posicao);
					echo"";
				}
				
				if($char == "'"){
					$k++;
					$palavra = "";
					
					while(($char = fgetc($file)) != "'"){
						$palavra .= $char; 
					}
					
					if($k == 4){
						if ($palavra == 'Cálculo'){
							$linhaM++;
						}else{
							$linhaC++;
						}
					}
					
				}	
			}
			
			fclose($file);	
			
			if($pagina==1){
				return $linhaM;
			}else{
				return $linhaC;
			}
			
		}
		
		
		function verificaTipoMaquina($char, $file){				
			$k=0;
			
			while(")" != ($char = fgetc($file))){
				
				if($char == "'"){
					$k++;
					$palavra = "";
					
					while(($char = fgetc($file)) != "'"){
						$palavra .= $char; 
					}
					
					if($k == 4){
						if ($palavra == 'Cálculo'){
							return 1;
						}else{
							return 0;
						}
					}
					
				}	
			}
		}
		
		
		//Função para percorrer o vetor que contém todos os dados contidos no banco de dados.
		public function insereDados($pagina){

			$file = fopen("saida.txt","r");

			while ("%" != ($char = fgetc($file)));
			
			echo "<tr class='tr-odd tr-1'>";
			$k=0;
			
			$primeira = 0;
			while("$" != ($char = fgetc($file))){
				if($primeira == 0){
					$posicao = ftell($file);
					$tipo = $this->verificaTipoMaquina($char, $file);
					fseek($file, $posicao);
					$primeira=1;
				}
				
				if($char == ","){
					echo" ";
				}elseif($char == ")"){
					$k=0;
					echo"</tr>";
					$char = fgetc($file);
					
				}elseif($char == "("){
					$posicao = ftell($file);
					$tipo = $this->verificaTipoMaquina($char, $file);
					fseek($file, $posicao);
					echo"";
				}
				
				if($char == "'"){
					$k++;
					$palavra = "";
					
					while(($char = fgetc($file)) != "'"){
						$palavra .= $char; 
					}
					
					if($k != 4 && $tipo==1 && $pagina==1){
						echo"<td class='td-<?php echo $k; ?>'>$palavra</td>";
					}elseif($k != 4 && $tipo==0 && $pagina==0){
						echo"<td class='td-<?php echo $k; ?>'>$palavra</td>";
					}
				}	
			}
			
			fclose($file);	
		}
		
	}
?>