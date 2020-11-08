$(document).ready(function () {
  $('form.example').submit(function (e) {
    e.preventDefault();

    $.post($(this).attr('action'), $(this).serialize(), function (data) {
      // do whatever with the data returned
      console.log(data);
    });
  }, 'text');
});
