<?php namespace BetterExport;

class VarExporter {
    public function export($var) {
        return var_export($var, true);
    }
}
