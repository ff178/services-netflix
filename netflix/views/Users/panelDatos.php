<?php include MODULE."header.php"; ?>
  <body>
      <?php include MODULE."menu.php"; ?>
      <div class="datosVideo">
        <div class="formulario">
            <div class="elegir" id="eleccion">
                <h3>¿Quieres añadir una...?</h3>
                <div class="radio">
                    <div class="item"><input class="choose" type="radio" name="serie" value="serie"> Serie</div>
                    <div class="item"><input class="choose" type="radio" name="pelicula" value="pelicula"> Película</div>
                </div>
            </div>
            <div class="elegir" id="modificar">
                <h3>¿Quieres añadir o modificar una serie existente?</h3>
                <div class="radio">
                    <div class="item"><input class="panel" type="radio" name="nueva" value="nueva"> Nueva</div>
                    <div class="item"><input class="panel" type="radio" name="modificar" value="modificar"> Modificar</div>
                </div>
            </div>

            <div class="elegir" id="modificarP">
                <h3>¿Quieres añadir o modificar una película existente?</h3>
                <div class="radio">
                    <div class="item"><input class="panel" type="radio" name="nuevaP" value="nuevaP"> Nueva</div>
                    <div class="item"><input class="panel" type="radio" name="modificarP" value="modificarP"> Modificar</div>
                </div>
            </div>

            <form action="" id="datosSerie">
                <div class="mitad">
                    <div class="items"><input type="text" placeholder="Titulo"></div>
                    <div class="items"><textarea placeholder="Descripcion" cols="30" rows="5"></textarea></div>
                    <div class="items"><input type="date" ></div>
                    <div class="items"><a id="addActor" href="#">Click aquí para añadir reparto</a></div>
                </div>
                <div class="mitad">
                    <div class="idiomas">
                        <h5>Categorias</h5>
                        <div class="item"><input class="panel" type="checkbox" name="categoria" value="espanol"> Español</div>
                        <div class="item"><input class="panel" type="checkbox" name="categoria" value="ingles"> Inglés</div>
                        <div class="item"><input class="panel" type="checkbox" name="categoria" value="espanol"> Español</div>
                        <div class="item"><input class="panel" type="checkbox" name="categoria" value="ingles"> Inglés</div>
                        <div class="item"><input class="panel" type="checkbox" name="categoria" value="espanol"> Español</div>
                        <div class="item"><input class="panel" type="checkbox" name="categoria" value="ingles"> Inglés</div>
                        <div class="item"><input class="panel" type="checkbox" name="categoria" value="espanol"> Español</div>
                        <div class="item"><input class="panel" type="checkbox" name="categoria" value="ingles"> Inglés</div>
                    </div>
                    <div class="items">
                        <div class="subitem">
                            <p>Audio </p>
                            <select>
                                <option value="Animada">Animada</option>
                                <option value="Terror">Terror</option>
                                <option value="Comedia">Comedia</option>
                                <option value="Suspenso">Suspenso</option>
                            </select>
                        </div>
                        <div class="subitem">
                            <p>Calidad </p>
                            <select>
                                <option value="Animada">Animada</option>
                                <option value="Terror">Terror</option>
                                <option value="Comedia">Comedia</option>
                                <option value="Suspenso">Suspenso</option>
                            </select>
                        </div>
                    </div>
                    <div class="items">
                        <p>Temporada</p>
                        <select>
                            <option value="Animada">Animada</option>
                            <option value="Terror">Terror</option>
                            <option value="Comedia">Comedia</option>
                            <option value="Suspenso">Suspenso</option>
                        </select>
                    </div>
                    <div class="idiomas">
                        <h5>Idiomas</h5>
                        <div class="item"><input class="panel" type="radio" name="idioma" value="espanol"> Español</div>
                        <div class="item"><input class="panel" type="radio" name="idioma" value="ingles"> Inglés</div>
                    </div>
                </div>
                <div class="boton">
                    <input type="submit" value="Agregar">
                </div>
            </form>

            <form action="" id="datosPeli" method="post">
                <div class="mitad">
                    <div class="items"><input type="text" placeholder="Titulo" name="titulo"></div>
                    <div class="items"><textarea placeholder="Descripcion" cols="30" rows="5" name="description"></textarea></div>
                    <div class="items"><input type="date" name="fechaEstreno"></div>
                    <div class="items"><a id="addActor2" href="#">Click aquí para añadir reparto</a></div>
                </div>
                <div class="mitad">
                    <div class="idiomas">
                        <h5>Categorias</h5>
                        <div class="item"><input class="panel" type="checkbox" name="categoria" value="espanol"> Español</div>
                        <div class="item"><input class="panel" type="checkbox" name="categoria" value="ingles"> Inglés</div>
                        <div class="item"><input class="panel" type="checkbox" name="categoria" value="espanol"> Español</div>
                        <div class="item"><input class="panel" type="checkbox" name="categoria" value="ingles"> Inglés</div>
                        <div class="item"><input class="panel" type="checkbox" name="categoria" value="espanol"> Español</div>
                        <div class="item"><input class="panel" type="checkbox" name="categoria" value="ingles"> Inglés</div>
                        <div class="item"><input class="panel" type="checkbox" name="categoria" value="espanol"> Español</div>
                        <div class="item"><input class="panel" type="checkbox" name="categoria" value="ingles"> Inglés</div>
                    </div>
                    <div class="items">
                        <div class="subitem">
                            <p>Audio </p>
                            <select>
                                <option value="Animada">Animada</option>
                                <option value="Terror">Terror</option>
                                <option value="Comedia">Comedia</option>
                                <option value="Suspenso">Suspenso</option>
                            </select>
                        </div>
                        <div class="subitem">
                            <p>Calidad </p>
                            <select>
                                <option value="Animada">Animada</option>
                                <option value="Terror">Terror</option>
                                <option value="Comedia">Comedia</option>
                                <option value="Suspenso">Suspenso</option>
                            </select>
                        </div>
                    </div>
                    <div class="idiomas">
                        <h5>Idiomas</h5>
                        <div class="item"><input class="panel" type="radio" name="lenguaje" value="espanol"> Español</div>
                        <div class="item"><input class="panel" type="radio" name="lenguaje" value="ingles"> Inglés</div>
                    </div>
                </div>
                <div class="boton">
                    <input type="submit" value="Agregar">
                </div>
            </form>

            <div id="eleccionSerie">
                <h3>Elige la serie que quieres modificar</h3>
                <div class="subitem">
                    <p>Elegir serie: </p>
                    <form >
                        <select name="opcion">
                            <option value="suspenso">Suspenso</option>
                            <option value="animada">Animada</option>
                            <option value="terror">Terror</option>
                            <option value="comedia">Comedia</option>
                        </select>
                        <div class="boton">
                            <input type="submit" value="Modificar">
                        </div>
                    </form>
                </div>
            </div>

            <div id="eleccionPelicula">
                <h3>Elige la película que quieres modificar</h3>
                <div class="subitem">
                    <p>Elegir película: </p>
                    <form >
                        <select name="opcion">
                            <option value="suspenso">Suspenso</option>
                            <option value="animada">Animada</option>
                            <option value="terror">Terror</option>
                            <option value="comedia">Comedia</option>
                        </select>
                        <div class="boton">
                            <input type="submit" value="ModificarP">
                        </div>
                    </form>
                </div>
            </div>
        </div>
      </div>
  </body>
</html>
