<div class="col-md-3 col-sm-3">
                    <section id="sidebar">
                        <aside id="edit-search">
                            <header><h3>Buscar Propiedades</h3></header>
                            <form role="form" id="form-sidebar" class="form-search" method="post" action="http://localhost/php/realstate/index.php/propiedades/ver/">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="search-box-property-id" placeholder="Propiedad ID">
                                </div>
                                <div class="form-group">
                                    <select name="mode">
                                        <option value="">Modo</option>
                                        <option value="1">Alquiler</option>
                                        <option value="2">Venta</option>
                                    </select>
                                </div><!-- /.form-group -->
                                
                                <div class="form-group">
                                    <select name="type">
                                        <option value="">Tipo de Propiedad</option>
                                        <option value="1">Apartamentos</option>
                                        <option value="2">Casas</option>
                                        <option value="3">Edificios</option>
                                        <option value="4">Oficinas</option>
                                        <option value="5">Finacas / Terrenos</option>
                                        <option value="6">Villas</option>
                                     
                                    </select>
                                </div><!-- /.form-group -->
                               
                                <div class="form-group">
                                    <input type="text" class="form-control" id="price_from" name="price_from" placeholder="Precio Desde">
                                </div>
                                 <div class="form-group">
                                    <input type="text" class="form-control" id="price_to"  name="price_to" placeholder="Precio Hasta">
                                </div>
                                <div class="form-group">
                                    <select name="country">
                                        <option value="">Pais</option>
                                        
                                        <option value="5">Republica Dominicana</option>
                                    </select>
                                </div><!-- /.form-group -->
                                 <div class="form-group">
                                    <select name="province">
                                        <option value="">Provincia</option>
                                        
                                        
                                    </select>
                                </div><!-- /.form-group -->
                                <div class="form-group">
                                    <select name="city">
                                        <option value="">Ciuadad</option>
                                        
                                    </select>
                                </div><!-- /.form-group -->
                                <div class="form-group">
                                    <select name="sector">
                                        <option value="">Sector</option>
                                        
                                    </select>
                                </div><!-- /.form-group -->
                               
                                <div class="form-group">
                                    <button type="submit" class="btn btn-default">Buscar Ahora</button>
                                </div><!-- /.form-group -->
                            </form><!-- /#form-map -->
                        </aside><!-- /#edit-search -->
                        
                    </section><!-- /#sidebar -->
                </div><!-- /.col-md-3 -->