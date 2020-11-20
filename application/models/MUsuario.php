<?php
class MUsuario extends CI_Model
/**
*-------------------------------------------------------------------------
* Modelo usuario
* ------------------------------------------------------------------------
*
* Modelo de base de datos para el controlador usuarios
*
* @author Hugo, Pedro, Jesús
*
*/
{
	function validate(){
		$arr['correo'] = $this->input->post('correo');
		$arr['contrasena'] = $this->input->post('contrasena');
		return $this->db->get_where('usuario',$arr)->row();
    }
    
    /**
     * Guarda usuario
     *
     * @param   Array
     * @return  Boolean
     */
	public function guardar_usuario($data)
    {
		$this->db->insert('usuario',$data);
        $IDUsuario = $this->db->insert_id();
	}
	
    /**
     * Lista los usuarios
     *
     * @param   Int
     * @return  Object
     */
	// 
    public function lista_usuarios()
    {
        return $this->db->get('usuario')->result();
    }
    
	/**
     * Obtiene un usuario en específico
     * 
     * @param   Int
     * @return  Object
     */
    public function obtener_usuario($id)
    {
        $this->db->where('IDUsuario',$id);
        return $this->db->get('usuario')->row();
    }

    /**
    * Actualiza un usuario
    *
    * @param   Int
    * @param   Array
    * @return  Boolean
    */
    public function actualizar_usuario($id,$data)
    {
        $this->db->trans_start();
        $this->db->where('IDUsuario',$id);
        $this->db->update('usuario',$data);
        $this->db->trans_complete();
        return $this->db->trans_status();
    }

	/**
     * Elimina un usuario
     * 
     * @param   Int
     * @return  Boolean
     */
	public function elimina_usuario($id)
    {
        $this->db->where('IDUsuario', $id);
        $this->db->delete('usuario');
    
    }
}