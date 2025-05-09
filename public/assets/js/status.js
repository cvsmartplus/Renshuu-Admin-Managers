function handleStatusChange(value) {
    switch (value) {
        case 'aktif':
            window.location.href = '/AdminManager/roleperusahaan';
            break;
        case 'tidak-aktif':
            window.location.href = '/AdminManager/rolekursus';
            break;
        default:
            console.warn('Tidak ada rute untuk nilai:', value);
    }
}
