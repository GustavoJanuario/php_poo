<?php 
require_once("Pessoa.php");
require_once("Publicacao.php");

class Livro implements Publicacao
{
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;

    public function __construct($titulo, $autor, $totPaginas, $leitor)
    {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->totPaginas = $totPaginas;
        $this->leitor = $leitor;
        $this->pagAtual = 0;
        $this->aberto = false;
    }

    public function detalhes()
    {
        echo "<hr>livro " . $this->titulo . " escrito por " . $this->autor;
        echo "<br>Páginas: " . $this->totPaginas . " atual " . $this->pagAtual;
        echo "<br>Sendo lido por " . $this->leitor->getNome();
    }

    public function abrir()
    {
        $this->aberto = true;
    }

    public function fechar()
    {
        $this->aberto = false;
    }

    public function folhear($pagina)
    {
        if($pagina > $this->totPaginas)
        {
            echo "Número de página maior que o livro!";
        }
        else
        {
            $this->pagAtual = $pagina;
        }
    }

    public function avancarPag()
    {
        if($this->pagAtual < $this->totPaginas)
        {
            $this->pagAtual++;
        }
        else
        {
            echo "Você está na ultima página";
        }
    }

    public function voltarPag()
    {
        if($this->pagAtual > 0)
        {
            $this->pagAtual--;
        }
        else
        {
            echo "Você está na primeira página";
        }
    }

    /**
     * Get the value of leitor
     */ 
    public function getLeitor()
    {
        return $this->leitor;
    }

    /**
     * Set the value of leitor
     *
     * @return  self
     */ 
    public function setLeitor($leitor)
    {
        $this->leitor = $leitor;

        return $this;
    }

    /**
     * Get the value of titulo
     */ 
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set the value of titulo
     *
     * @return  self
     */ 
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get the value of autor
     */ 
    public function getAutor()
    {
        return $this->autor;
    }

    /**
     * Set the value of autor
     *
     * @return  self
     */ 
    public function setAutor($autor)
    {
        $this->autor = $autor;

        return $this;
    }

    /**
     * Get the value of totPaginas
     */ 
    public function getTotPaginas()
    {
        return $this->totPaginas;
    }

    /**
     * Set the value of totPaginas
     *
     * @return  self
     */ 
    public function setTotPaginas($totPaginas)
    {
        $this->totPaginas = $totPaginas;

        return $this;
    }

    /**
     * Get the value of pagAtual
     */ 
    public function getPagAtual()
    {
        return $this->pagAtual;
    }

    /**
     * Set the value of pagAtual
     *
     * @return  self
     */ 
    public function setPagAtual($pagAtual)
    {
        $this->pagAtual = $pagAtual;

        return $this;
    }

    /**
     * Get the value of aberto
     */ 
    public function getAberto()
    {
        return $this->aberto;
    }

    /**
     * Set the value of aberto
     *
     * @return  self
     */ 
    public function setAberto($aberto)
    {
        $this->aberto = $aberto;

        return $this;
    }
}

?>