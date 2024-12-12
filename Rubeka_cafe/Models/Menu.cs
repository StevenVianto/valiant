using System.ComponentModel.DataAnnotations;

namespace Rubeka_cafe.Models
{
    public class Menu
    {
        [Key]
        public int IdMenu { get; set; }
        public string KodeMenu { get; set; }
        public string Type { get; set; }
        public string Picture { get; set; } = "default.jpg";
        public string NameMenu { get; set; }
        public decimal Price { get; set; }
        public string? Description { get; set; }
        public bool Status { get; set; }
    }
}
