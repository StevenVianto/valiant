using System.ComponentModel.DataAnnotations;

namespace Rubeka_cafe.Models
{
    public class User
    {
        [Key]
        public int Id { get; set; }
        public string Nama { get; set; }
        public string Username { get; set; }
        public string Password { get; set; }
        public string Level { get; set; }
        public DateTime CreatedAt { get; set; }
    }
}
