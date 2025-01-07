import './bootstrap';
import 'preline'
import Alpine from 'alpinejs';
import AOS from 'aos';
import 'aos/dist/aos.css'; // You can also use <link> for styles
// ..
window.Alpine = Alpine;

AOS.init();
Alpine.start();
