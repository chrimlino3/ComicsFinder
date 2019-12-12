<style>

.container {
    height: 400px;
    display: cover;
    background-image: url('https://images.unsplash.com/photo-1505489435671-80a165c60816?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=831&q=80');
    background-size: cover;
    background-position: center;
    opacity: 90%;
}

.background {
   background-color: #f18f01;
}

img {
    display: flex;
    justify-content: center;
    margin-left: 795px;
}
.results {
  display: grid;
  grid-template-columns: 1fr;
}

.comments {
    margin-left: 630px;
    margin-top: 10px;

}

.searchbar {
    display: flex;
    justify-content: right;
    padding: 10px;
}

h3 {
    display: flex;
    justify-content: center;
    margin-bottom: 0px;
    font-family: Impact; 
    color: #c4c4c4;
}

h2 {
  display: flex;
  justify-content:right;
  padding-top: 180px;
  color: #960200;
  padding: 10px;
}


 h4 {
    display: flex;
    justify-content: center;
    margin-bottom: 0px;
    font-family: Impact;
    background-color: #d00000;
    width: 50%;
 }

h5 {
    display: flex;
    justify-content: right;
    color: #960200;
    padding: 10px;
}

form {
    margin-left: 850px;
    margin-top: 10px;
}

p {
    display: flex;
    justify-content: center;
    margin-left: 30
    font-family: Impact normal;
    background-color: #d00000;
    width: 50%;
}

.button:hover {
  background-color: #ED1D24;
  color: white;
}

.button {
    background-color: #ED1D24;
    display: inline;
    color: black;
    padding: 5px 5px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 15px;
    border-radius: 5px;

	input.star { 
        display: none; 
    }

	label.star {
	  float: right;
	  padding: 10px;
	  font-size: 36px;
	  color: #444;
	  transition: all .2s;
	}

    .stars {
	  width: 270px;
	  display: inline-block;
	}
	input.star:checked ~ label.star:before {
	  content: '\f005';
	  color: #FD4;
	  transition: all .25s;
	}

	input.star-5:checked ~ label.star:before {
	  color: #FE7;
	  text-shadow: 0 0 20px #952;
	}

	input.star-1:checked ~ label.star:before { color: #F62; }
	label.star:hover { transform: rotate(-15deg) scale(1.3); }
	label.star:before {
	  content: '\f006';
	  font-family: FontAwesome;
	}


</style>

