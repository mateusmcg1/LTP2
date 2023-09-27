<?php
class UsuarioDAO
{
    public function create(Usuario $usuario)
    {
        try {
            $sql = "INSERT INTO usuario (nome, sobrenome, idade, sexo, email)
                    VALUES (:nome, :sobrenome, :idade, :sexo, :email)";
            $p_sql = Conexao::getConexao()->prepare($sql);
            $p_sql->bindValue(":nome", $usuario->getNome());
            $p_sql->bindValue(":sobrenome", $usuario->getSobrenome());
            $p_sql->bindValue(":idade", $usuario->getIdade());
            $p_sql->bindValue(":sexo", $usuario->getSexo());
            $p_sql->bindValue(":email", $usuario->getEmail());
            
            return $p_sql->execute();
        } catch (Exception $e) {
            print("Erro ao inserir o usuário <br>" . $e . '<br>');
        }
    } // fim da função create
    
    public function read()
    {
        try {
            $sql = "SELECT * FROM usuario ORDER BY nome ASC";
            $result = Conexao::getConexao()->query($sql);
            $lista = $result->fetchAll(PDO::FETCH_ASSOC);
            $f_lista = array();
            foreach ($result as $l) {
                $f_lista[] = $this->listaUsuario($l);
            }
            return $f_lista;
        } catch (Exception $e) {
            print("Erro ao buscar usuário <br>" . $e . "<br>");
        }
    }
    
    public function update(Usuario $usuario)
    {
        try {
            $sql = "UPDATE usuario SET
                    nome = :nome,
                    sobrenome = :sobrenome,
                    idade = :idade,
                    sexo = :sexo
                    email = :email
                    WHERE id = :id";
        $p_sql = Conexao::getConexao()->prepare($sql);
        $p_sql -> bindValue (":nome",$usuario->getNome());
        $p_sql -> bindValue (":sobrenome",$usuario->getSobrenome());
        $p_sql -> bindValue (":sexo",$usuario->getSexo());
        $p_sql -> bindValue (":email",$usuario->getEmail());
        $p_sql -> bindValue (":id",$usuario->getId());

    return $p_sql->execute();
        } catch (Exception $e) {
            print("Erro ao atualizar usuário <br>" . $e . "<br>");
        }
    }
    
    public function delete($id)
    {
        try {
            $sql = "DELETE FROM usuario WHERE id = :id";
            $p_sql = Conexao::getConexao()->prepare($sql);
            $p_sql->bindValue(":id", $id);
    
            if ($p_sql->execute()) {
                $msg = "Deletado com sucesso!";
            } else {
                $msg = "Erro ao deletar!";
            }
        } catch (Exception $e) {
            print("Erro ao deletar usuário <br>" . $e . "<br>");
        }
    }

    private function listaUsuario($row){
        $usuario = new Usuario();
        $usuario -> setId($row['id']);
        $usuario -> setNome($row['nome']);
        $usuario -> setSobrenome($row['sobrenome']);
        $usuario -> setIdade($row['idade']);
        $usuario -> setSexo($row['sexo']);
        $usuario -> setEmail($row['email']);

        return $usuario;
    }
}
