function formatoCedula(input) {
    const value = input.value.replace(/\D/g, '');
    const formattedValue = value.replace(/^(\d{1})(\d{3})(\d{3})(\d{1})$/, '$1.$2.$3-$4');
    input.value = formattedValue.toLowerCase();
}