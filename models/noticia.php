<?php
    class Noticia {
        private $titulo;
        private $entrada;
        private $create_at;
        private $usuario;

        function __construct($titulo, $entrada, $create_at, $usuario) {
            $this->titulo = $titulo;
            $this->entrada = $entrada;
            $this->create_at = $create_at;
            $this->usuario = $usuario;
        }

        public function verModal() {
            echo <<<HTML
                <div class="col mt-5 text-left">
                    <div class="card">
                        <div class="card-header">
                            $this->titulo
                        </div>
                        <div class="card-body">
                            <blockquote class="blockquote mb-0">
                                <p>$this->entrada</p>
                                <footer class="blockquote-footer">Entrada creada por $this->usuario en <cite title="Source Title">$this->create_at</cite></footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
            HTML;
        }
    }
?>