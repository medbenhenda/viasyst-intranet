<?php
class Conf 
{
    private $status;
    private $author;
    private $created;


    	public function __construct(array $params)
	{
		$this->status = $params['status'];
		$this->author = $params['author'];
		$this->created = date('Y-m-d H:i:s');
	}

	public function getStatus()
	{
		return $this->status;
	}


	public function getAuthor()
	{
		return $this->author;
	}

	public function getCreated
	{
		return $this->created;
	}
}
