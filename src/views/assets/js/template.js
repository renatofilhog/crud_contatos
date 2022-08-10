let telCadPessoa = document.querySelector("#telefone-cadPessoa");
let cpfCadPessoa = document.querySelector("#cpf-cadPessoa");
let cepCadPessoa = document.querySelector("#cep-cadPessoa");
let maskTelefone = {
    mask: '(00) 0 0000-0000'
}
let maskCPF = {
    mask: '000.000.000-00'
}
let maskCEP = {
    mask: '00.000-000'
}
var mask = IMask(telCadPessoa, maskTelefone);
var mask2 = IMask(cpfCadPessoa, maskCPF);
var mask3 = IMask(cepCadPessoa, maskCEP);