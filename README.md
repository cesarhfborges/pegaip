# pegaip
classe php para listar informações de ip.<br/>
1 - basta dar um require once no arquivo php;<br/>
2 - instanciar a classe pegaIp;<br/>

```
  require_once "PegaIp.php";
  **$varExemple = pegaIp();**
```

Chamar sua variavel da seguinte forma executando o metodo apartir da variavel(objeto).

```
echo $varExemple->getIpExterno();
echo $varExemple->getIpInterno();
echo $varExemple->getCidade();
echo $varExemple->getPais();
echo $varExemple->getIsp(;
echo $varExemple->getRegiao();
echo $varExemple->getStatus();
echo $varExemple->getCountryCode();
```
