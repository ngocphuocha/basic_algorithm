<?php

namespace html;
class Table
{
    public string $title = '';
    public int $numRows = 0;

    public function message()
    {
        echo "<p>Table $this->title has $this->numRows rows.</p>";
    }
}

class Row
{
    public int $numCells = 0;
    public function message()
    {
        echo "<p>The row has $this->numCells cells.</p>";
    }
}