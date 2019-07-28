
<?php 


class PostUser{


	//atributos
	protected $idUser = "1";
	protected $linkPost = "https://jsonplaceholder.typicode.com/posts";
	protected $linkDados = "https://jsonplaceholder.typicode.com/users/";


	public function getIdUser(){
		return $this->idUser;
	}

	public function setIdUser($id){
		$this->idUser = $id;
	}

	public function getLinkPost(){
		return $this->linkPost;
	}

	public function setLinkPost($post){
		$this->linkPost = $post;
	}

	public function getLinkDados(){
		return $this->linkDados;
	}

	public function setLinkDados($dados){
		$this->linkDados = $dados;
	}


	//metodos
	public function setopt($link){
		$info = $link;

		$ch = curl_init($info); 

		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

		$resultado = curl_exec($ch);
		curl_close($ch);

		return $resultado;
	}

	public function exibePost(){

		$resultado = $this->setopt($this->getLinkPost());

		$data = json_decode($resultado, true);

		return $data;
	}

	public function exibeUser(){

		$resultado = $this->setopt($this->getLinkDados() . $this->getIdUser());

		$data = json_decode($resultado, true);

		return $data;
	}




}





 ?>