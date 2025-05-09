document.querySelectorAll('.dropdown-item').forEach(item => {
  item.addEventListener('click', function () {
    const role = this.getAttribute('data-role');
    window.location.href = `/admin/role/${role}`;
  });
});

