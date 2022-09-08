<?php

class Article
{
    function __construct(private ?STRING $name_art, private ?STRING $content_art,  private ?STRING $date_art,   private ?INT $id_art, private ?INT $id_type = null)
    {

    }

    public function get_name_art(): STRING
    {
        return htmlspecialchars($this->name_art);
    }

    public function set_name_art($value): VOID
    {
        $this->name_art = $value;
    }

    public function get_content_art(): STRING
    {
        return $this->content_art;
    }

    public function set_content_art($value): VOID
    {
        $this->content_art = $value;
    }

    public function get_date_art(): STRING
    {
        return $this->date_art;
    }
    public function set_date_art($value): VOID
    {
        $this->date_art = $value;
    }

    public function get_id_art(): INT
    {
        return $this->id_art;
    }

    public function set_id_art($value): VOID
    {
        $this->id_art = $value;
    }

    public function get_id_type(): INT
    {
        return $this->id_type;
    }

    public function set_id_type($value): VOID
    {
        $this->id_type = $value;
    }
}
