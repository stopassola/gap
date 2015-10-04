<?php
class GeraDocumento
{
    private $phpWord;
    private $section;
    private $conexao;
    public $mensagem;
        
    public function __construct()
    {       
        $this->mensagem = "Cria documento";
        /* 
        $this->conexao = $conn;
        $this->phpWord = new \PhpOffice\PhpWord\PhpWord();
        $this->phpWord->addFontStyle('fonte_texto',   array('name' => 'Times New Roman', 'size' => 18, 'align' => 'justify'));
        $this->phpWord->addFontStyle('fonte_titulo',  array('name' => 'Times New Roman', 'size' => 18, 'align' => 'center', 'allCaps' => true));
        // New portrait section
        $this->section = $this->phpWord->addSection();
        
        // Simple text
        $titulo = "EXCELENTÍSSIMO SENHOR DOUTOR JUIZ DA .. VARA DO TRABALHO DE CANELA";
        $this->section->addText($titulo, 'fonte_titulo');
        
        //Espaçamento de 20 quebras de linha
        $this->section->addTextBreak(20);
        */
    }
    
    public function GeraBlocoDeTexto(array $fatos)
    {
        foreach($fatos as $item){
            switch ($item) {
                case "assinatura-ctps-foi-posterior":
                    $sql = "SELECT texto FROM templates_pedidos WHERE nomedofato = :nomedofato";
                    $stmt = $this->conexao->prepare($sql);
                    $stmt->bindValue(":nomedofato", $item);
                    $stmt->execute();
                    $linha = $stmt->fetch();
                    $texto = $linha['texto'];
                    echo $texto;
                    //Troca as datas                    
                    //$this->section->addText($texto, 'fonte_texto');
                    break;
                default:
                   echo "Caso não se enquadre, entra nesse bloco.";
                }
        }
    }
    
    public function __destruct(){
        $caminho = __DIR__ . "/src/peticoes/peticao.docx";
        //$this->phpWord->save($caminho, 'Word2007'); //Outros formatos são: ODText, RTF, HTML e PDF
    }
}
?>