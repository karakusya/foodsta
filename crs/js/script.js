$(function() {
    $(".tel").mask("+380 (99) 999-99-99"); 
    
    
    // Отримання форми та додавання обробника подій подачі
    $('#contact-form').submit(function(event) {
      event.preventDefault(); // Зупинка стандартної подачі форми
  
      var formData = {
        'name': $('input[name=name]').val(),
        'tel': $('input[name=tel]').val(),
        'email': $('input[name=email]').val()
      };
  
      // Відправка даних форми за допомогою AJAX
      $.ajax({
        type: 'POST',
        url: 'sender.php', // Вказуємо URL адресу PHP-скрипту для обробки даних
        data: formData,
        dataType: 'json',
        encode: true
      }).done(function(data) {
        // Виведення відповіді в консолі
        console.log(data);
        // Очистка полів форми після успішної відправки
        $('input[name=name]').val('');
        $('input[name=tel]').val('');
        $('input[name=email]').val('');
      }).fail(function(data) {
        // Виведення відповіді в консолі у разі невдалої відправки
        console.log(data);
      });
    });
  });