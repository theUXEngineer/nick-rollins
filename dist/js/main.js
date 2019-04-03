//Copy email address

var clipboard = new ClipboardJS('.email-copy');

clipboard.on('success', function() {
    document.body.insertAdjacentHTML('beforeend', '<div class="alert success">Email Copied!</div>');
    
});

clipboard.on('error', function(e) {
    document.body.insertAdjacentHTML('beforeend', '<div class="alert fail">email me: nick@uxengineer.com</div>');
});

//Scroll to sections

function handleClickLink(event) {
    const block = event.target.dataset.block;
    document.getElementById(block).scrollIntoView({ behavior: 'smooth'});
  }
  
  document.querySelectorAll("button[data-block]").forEach((elem) => {
    elem.addEventListener('click', handleClickLink);
  });

  //Update copyright year

  document.getElementById('copyright-year').innerHTML = new Date().getFullYear();