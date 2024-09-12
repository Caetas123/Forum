// Adiciona os pontos e os traços do cpf
document.getElementById('cpf').addEventListener('input', function (e) {
    let cpf = e.target.value.replace(/\D/g, '');  // Remove não numéricos

    if (cpf.length > 3) cpf = cpf.slice(0, 3) + '.' + cpf.slice(3);
    if (cpf.length > 7) cpf = cpf.slice(0, 7) + '.' + cpf.slice(7);
    if (cpf.length > 11) cpf = cpf.slice(0, 11) + '-' + cpf.slice(11);

    e.target.value = cpf;  // Atualiza o campo com o CPF formatado
});

// Adiciona os traços e parenteses do número
document.getElementById('phone').addEventListener('input', function (a) {
    let phone = a.target.value.replace(/\D/g, '');  // Remove não numéricos
    if (phone.length > 0) phone = phone.slice(0, 0) + '+' + phone.slice(0); // Posição onde adicionar o objeto
    if (phone.length > 3) phone = phone.slice(0, 3) + ' ' + phone.slice(3);
    if (phone.length > 4) phone = phone.slice(0, 4) + '(' + phone.slice(4);
    if (phone.length > 7) phone = phone.slice(0, 7) + ')' + phone.slice(7);
    if (phone.length > 8) phone = phone.slice(0, 8) + ' ' + phone.slice(8);
    if (phone.length > 14) phone = phone.slice(0, 14) + '-' + phone.slice(14);

    a.target.value = phone;  // Atualiza o campo com o phone formatado
});