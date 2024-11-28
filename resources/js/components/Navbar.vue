<template>
    <nav>
      <ul>
        <li><router-link to="/">Home</router-link></li>
        <li><router-link to="/about">About</router-link></li>
      </ul>
    </nav>
  </template>

  <script>
  export default {
    name: 'Navbar',
  };
  </script>

  <style scoped>
  /* Your CSS styles for the navbar */
  nav {
    background-color: #333;
    padding: 10px;
  }

  ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
  }

  li {
    display: inline;
    margin-right: 10px;
  }

  a {
    color: white;
    text-decoration: none;
  }

  a:hover {
    text-decoration: underline;
  }
  </style>
