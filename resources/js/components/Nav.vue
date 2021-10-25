 <template>
 <div>
  <b-navbar toggleable="lg" type="dark" variant="info">
    <b-navbar-brand href="#">Trova</b-navbar-brand>
    <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>
    <b-collapse id="nav-collapse" is-nav>
      <b-navbar-nav>
          <router-link to="/" class="nav-item nav-link"
                        >Home</router-link
                    >
                     <router-link to="/bookings/Pending" class="nav-item nav-link"
                        >Requests</router-link
                    >
                    <router-link to="/bookings/Active" class="nav-item nav-link"
                        >Services</router-link
                    >
                    <router-link to="/bookings/Payment" class="nav-item nav-link"
                        >Payments</router-link
                    >

      </b-navbar-nav>
    </b-collapse>
  </b-navbar>
</div>
</template>

<script>
export default {};
</script>
