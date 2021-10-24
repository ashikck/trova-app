// import AllProduct from './components/AllProduct.vue';
// import CreateProduct from './components/CreateProduct.vue';
// import EditProduct from './components/EditProduct.vue';
import Home from "./pages/Home.vue";
import Booking from "./pages/Booking.vue";

export const routes = [
    {
        name: "home",
        path: "/",
        component: Home
    },
    {
        name: "requests",
        path: "/bookings/:status",
        component: Booking
    }
    /* {
        name: "Services",
        path: "/services",
        component: Booking
    },
    {
        name: "payments",
        path: "/payments",
        component: Booking
    } */
];
