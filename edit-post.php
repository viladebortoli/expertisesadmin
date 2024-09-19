<?php include('header.php');?>
<?php include('includes/head.php');?>
<div class="container-exp">
	<div class="container-fluid p-0">
		<div class="row row-mobile-reverse">
			<div class="col-12 col-lg-9">
				<div class="bloco-exp">
					<div class="container">
						<div class="row row-center">
							<div class="col-9 col-lg-10">
								<h4 title="clientes cadastrados"><small>José Almdeia / Fazenda Agro Farm / Área 3 isolada - Cochila Norte </small> / 2024</h4>
							</div>
							<div class="col-3 col-lg-2 max-img text-right">
								<img src="images/apagar/f2.png">
							</div>
							<div class="col-12">
								<div class="clear space-min"></div>
							</div>
						</div>
                         <div class="row row-center">
                            <div class="col-12 col-lg-4">
                                <label class="input-exp d-block  ">
                                    <select>
                                        <option value="">2035/36</option>
                                        <option value="">2034/35</option>
                                        <option value="">2033/34</option>
                                        <option value="">2032/33</option>
                                        <option value="">2031/32</option>
                                        <option value="">2030/31</option>
                                        <option value="">2029/30</option>
                                        <option value="">2028/29</option>
                                        <option value="">2027/28</option>
                                        <option value="">2026/27</option>
                                        <option value="">2025/26</option>
                                         <option value="">2024/25</option>
                                         <option value="">2024/25</option>
                                         <option value="">2023/24</option>
                                         <option value="">2022/23</option>
                                         <option value="">2021/22</option>
                                         <option value="">2020/21</option>
                                     </select>
                                </label>
 							</div>
                             <div class="col-12 col-lg-4">
                                <label class="input-exp d-block s">
                                    <select>
                                         <option value="ativo">status ativo</option>
                                        <option value="congelago">status congelago</option>
                                    </select>
                                </label>
                            </div>
                            <div class="col-12">
                              <label class="input-exp d-block  ">
                                    <input type="text" placeholder="link do embed" value="https://expertises.maps.arcgis.com/apps/instant/media/index.html?appid=e904e6dbf6e84bb49fe7f72a5f219e26">
                                </label>
 							</div>
                            <div class="col-12">
                                <iframe src="https://expertises.maps.arcgis.com/apps/instant/media/index.html?appid=e904e6dbf6e84bb49fe7f72a5f219e26" class="recebe-embed"></iframe>
                            </div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-12 col-lg-3">
                 <div class="bloco-exp">
                    <div class="container">
                        <div class="row row-center">
                            <div class="col-9">
                                <h4 class="title-bloco">Publicar</h4>
                            </div>
                            <div class="col-3 text-right">
                                <a href="javascript:history.back()"class="action-return" title="voltar"></a>
                            </div>
                            <div class="col-12">
                            <div class="clear space-minn d-none d-lg-block"></div>
                                <small>salvar modificações</small>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="clear space-min"></div>
                                <button class="btn-action-save">salvar</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clear space-min"></div>
				<div class="d-none d-lg-block">
					<?php include('includes/bloco-clientes.php');?>
				</div>
 			</div>
		</div>
	</div>

</div>
<?php include('footer.php');?>
