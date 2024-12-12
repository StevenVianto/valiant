using System.ComponentModel.DataAnnotations;
using System.ComponentModel.DataAnnotations.Schema;

namespace Rubeka_cafe.Models
{
    public class Gallery
    {
        [Key]
        public int IdGallery { get; set; }
        [Required]
        [Column(TypeName = "nvarchar(250)")]
        public string NamePicture { get; set; } = "";
        public float SizePicture { get; set; }
        public DateTime DateUpload { get; set; }
    }
}
