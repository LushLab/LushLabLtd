

// JavaScript to load modal content and display it in a modal 
  // Add event listener to button 1
  var modalButton1 = document.getElementById('modal-button-1');
  modalButton1.addEventListener('click', function() {
    // Load modal content from modal-content-1.html using AJAX
    $.ajax({
      url: './modal/modal1.html',
      success: function(data) {
        // Create a new modal and set its content to the loaded data
        var modal = $('<div>').attr({
          class: 'modal fade',
          tabindex: '-1',
          role: 'dialog'
        }).append($('<div>').attr({
          class: 'modal-dialog',
          role: 'document'
        }).append($('<div>').attr({
          class: 'modal-content'
        }).html(data)));

        // Show the modal
        $('body').append(modal);
        modal.modal('show');
      }
    });
  });

  // Add event listener to button 2
  var modalButton2 = document.getElementById('modal-button-2');
  modalButton2.addEventListener('click', function() {
    // Load modal content from modal-content-2.html using AJAX
    $.ajax({
      url: './modal/modal2.html',
      success: function(data) {
        // Create a new modal and set its content to the loaded data
        var modal = $('<div>').attr({
          class: 'modal fade',
          tabindex: '-1',
          role: 'dialog'
        }).append($('<div>').attr({
          class: 'modal-dialog',
          role: 'document'
        }).append($('<div>').attr({
          class: 'modal-content'
        }).html(data)));

        // Show the modal
        $('body').append(modal);
        modal.modal('show');
      }
    });
  });

  // Add event listener to button 3
  var modalButton3 = document.getElementById('modal-button-3');
  modalButton3.addEventListener('click', function() {
    // Load modal content from modal-content-3.html using AJAX
    $.ajax({
      url: './modal/modal3.html',
      success: function(data) {
        // Create a new modal and set its content to the loaded data
        var modal = $('<div>').attr({
          class: 'modal fade',
          tabindex: '-1',
          role: 'dialog'
        }).append($('<div>').attr({
          class: 'modal-dialog',
          role: 'document'
        }).append($('<div>').attr({
          class: 'modal-content'
        }).html(data)));

        // Show the modal
        $('body').append(modal);
        modal.modal('show');
      }
    });
  });

  // Add event listener to button 4
  var modalButton4 = document.getElementById('modal-button-4');
  modalButton4.addEventListener('click', function() {
    // Load modal content from modal-content-4.html using AJAX
    $.ajax({
      url: './modal/modal4.html',
      success: function(data) {
        // Create a new modal and set its content to the loaded data
        var modal = $('<div>').attr({
          class: 'modal fade',
          tabindex: '-1',
          role: 'dialog'
        }).append($('<div>').attr({
          class: 'modal-dialog',
          role: 'document'
        }).append($('<div>').attr({
          class: 'modal-content'
        }).html(data)));

        // Show the modal
        $('body').append(modal);
        modal.modal('show');
      }
    });
  });

document.addEventListener('DOMContentLoaded', function () {
  const myModalElement = document.getElementById('myModal');
  const myModal = new bootstrap.Modal(myModalElement);

  myModalElement.addEventListener('show.bs.modal', function () {
    document.body.classList.add('no-scroll');
  });

  myModalElement.addEventListener('hidden.bs.modal', function () {
    document.body.classList.remove('no-scroll');
  });
});

// modal retain scroll position
document.addEventListener('DOMContentLoaded', function () {
  const openModalBtn = document.getElementById('openModalBtn');
  const closeModalBtn = document.querySelector('.modal .btn-close');
  const myModalElement = document.getElementById('myModal');
  const myModal = new bootstrap.Modal(myModalElement);

  openModalBtn.addEventListener('click', function () {
    document.body.dataset.scrollY = window.scrollY;
    document.body.style.top = `-${document.body.dataset.scrollY}px`;
    document.body.classList.add('modal-open');
  });

  closeModalBtn.addEventListener('click', function () {
    document.body.classList.remove('modal-open');
    window.scrollTo(0, parseInt(document.body.dataset.scrollY));
  });

  myModalElement.addEventListener('hidden.bs.modal', function () {
    document.body.classList.remove('modal-open');
    window.scrollTo(0, parseInt(document.body.dataset.scrollY));
  });
});

/* nav shrink */
$(window).scroll(function() {
  if ($(document).scrollTop() > 60) {
        $('.navbar-custom').addClass('shrink');
  } else {
        $('.navbar-custom').removeClass('shrink');
  }
});