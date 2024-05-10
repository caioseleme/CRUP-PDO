<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COTEMIG FIT</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
    <h3>CADASTRO DE ALUNOS</h3>
    <div class="container">
    <form action="inserir_dados.php" method="post">
        <div class="form-group">
            <label for="exampleInput">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Informe o nome">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Informe o email">
        </div>
        <div class="form-check">
            <label class="form-check-label" for="flexRadioDefault1">Sexo:</label><br>
            <label class="form-check-label" for="flexRadioDefault1">Masculino</label>
            <input class="form-check-input" type="radio" name="sexo" id="Masculino" value="M">
            <label class="form-check-label" for="flexRadioDefault1">Feminino</label>
            <input class="form-check-input" type="radio" name="sexo" id="Feminino" value="F">
            <label class="form-check-label" for="flexRadioDefault1">Outro</label>
            <input class="form-check-input" type="radio" name="sexo" id="Outro" value="O">  
        </div>
        <div class="form-group">
            <label for="exampleInput">Endereço</label>
            <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Informe o endereço">
            <label for="exampleInput">Número</label>
            <input type="tel" class="form-control" id="numero" name="numero" placeholder="Informe o número">
            <label for="exampleInput">Complemento</label>
            <input type="text" class="form-control" id="complemento" name="complemento" placeholder="Informe o complemento">
            <label for="exampleInput">Bairro</label>
            <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Informe o bairro">
            <label for="exampleInput">Cidade</label>
            <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Informe a cidade">
            <label for="exampleInput">UF</label>
            <select id="uf" name="uf" class:="form-control">
                <option value="AC">Acre</option>
                <option value="AL">Alagoas</option>
                <option value="AP">Amapá</option>
                <option value="AM">Amazonas</option>
                <option value="BA">Bahia</option>
                <option value="CE">Ceará</option>
                <option value="DF">Distrito Federal</option>
                <option value="ES">Espírito Santo</option>
                <option value="GO">Goiás</option>
                <option value="MA">Maranhão</option>
                <option value="MT">Mato Grosso</option>
                <option value="MS">Mato Grosso do Sul</option>
                <option value="MG">Minas Gerais</option>
                <option value="PA">Pará</option>
                <option value="PB">Paraíba</option>
                <option value="PR">Paraná</option>
                <option value="PE">Pernambuco</option>
                <option value="PI">Piauí</option>
                <option value="RJ">Rio de Janeiro</option>
                <option value="RN">Rio Grande do Norte</option>
                <option value="RS">Rio Grande do Sul</option>
                <option value="RO">Rondônia</option>
                <option value="RR">Roraima</option>
                <option value="SC">Santa Catarina</option>
                <option value="SP">São Paulo</option>
                <option value="SE">Sergipe</option>
                <option value="TO">Tocantins</option>
                <option value="EX">Estrangeiro</option>
            </select>
            <label for="exampleInput">Modalidade</label>
            <select name="modalidade" id="modalidade" class="form-control">
                <option value="Pilates">Pilates</option>
                <option value="Musculacao">Musculação</option>
                <option value="Natacao">Natação</option>
                <option value="Zumba">Zumba</option>
            </select>
            <button type="submit" class="btn btn-primary">Enviar</button>
            <button type="reset" class="btn btn-danger">Limpar</button>
        </div>
    </form>
    </div>
</body>
</html>