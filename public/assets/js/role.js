function handleStatusChange(value) {
    switch (value) {
        case 'admin-perusahaan':
            window.location.href = '/AdminManager/roleperusahaan';
            break;
        case 'admin-kursus':
            window.location.href = '/AdminManager/rolekursus';
            break;
        default:
            console.warn('Tidak ada rute untuk nilai:', value);
    }
}
